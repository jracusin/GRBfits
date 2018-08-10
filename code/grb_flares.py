#!/usr/bin/env python
"""
------------------------------------------------------------------------

Same selection and data preparation for Hakkila flare fiting

------------------------------------------------------------------------
"""

import numpy as np
import os
import matplotlib.pylab as plot
import fit_functions
import fit_lc
import re
from astropy.table import Table

def sample_selection(dir='/Users/jracusin/Swift/GRBfits/GRBs/',grblist=None):
	# read in LC fits - either at once or loop
	# grab only those flares fit by norris function
	# calculate flare fluence and flare ratio (peak/afterglow)
	# way to separate out isolated flares - delta t relative to width? single flare in GRB
	# make plot

	if grblist == None:
		grbdict,grbrec,grblist=fit_lc.load_data(dir=dir)
	ngrbs=len(grblist)

	fgrb=[]
	for i in range(ngrbs):
		if grblist[i].lcfit != {}:
			nf=len([xp for xp in grblist[i].lcfit.pnames if 'ts' in xp])
		else: nf=0
		if nf>0:
			fgrb.append(i)

	fgrb=np.array(fgrb)
#	grb,fluence,ratio=flare_fluence_ratio(grblist,fgrb)

	fluence=[]
	ratio=[]
	grb=[]
	outtstart=[]
	outtstop=[]
	c=[]
	i=0
	for fg in fgrb:
		g=grblist[fg]
		nf=len([xp for xp in g.lcfit.pnames if 'ts' in xp])
		for f in range(1,nf+1):
			wf=np.where(np.array(g.lcfit.pnames) == 'ts_'+str(f))[0][0]
			ts=g.lcfit.par[wf]
			t1=g.lcfit.par[wf+1]
			t2=g.lcfit.par[wf+2]
			mu=np.sqrt(t1/t2)
			width=t2*np.sqrt((1.+4.*mu))
			tstart=ts
			tstop=tstart+width
			if tstart>0:
				outtstart.append(tstart)
				outtstop.append(tstop)
#			print g.grb,tstart,tstop
				grb.append(g.grb)
				t=np.logspace(np.log10(tstart),np.log10(tstop),100)
				tt=np.array([t[:-1],t[1:]])
				delt=tt[1,:]-tt[0,:]
	#			t=np.array([[tstart,tstop]])
				p=np.array(g.lcfit.par)#.flatten()
				intflux=fit_functions.call_function('int'+g.lcfit.model,tt,*p)
				mo=re.split('_',g.lcfit.model)[1]
				intunder=fit_functions.call_function('int'+mo,tt,*p)
				fl=np.sum(intflux-intunder*delt)
				fluence.append(fl)

				### flux to underlying PL ratio at peak
				tp=np.append(ts+np.sqrt(t1*t2),t)
				flux=fit_functions.call_function(g.lcfit.model,tp,*p)
				under=fit_functions.call_function(mo,tp,*p)
				r=flux[0]/under[0]

				### determine if flares is isolated
				overlap=False
				if nf > 1:
					if f < nf:
						if tstop > g.lcfit.par[wf+4]: overlap=True  # if flare after overlaps
					if f > 1:
						if tstart < outtstop[len(outtstop)-2]: overlap=True # if flare before overlaps

				### determine if rise of flare is in data
				datastart=g.lc['Time'][0]+g.lc['T_-ve'][0]
				rise=False
				if datastart>tstart:
					rise=True

				if ((r>1e4*fl**-1.) & (fl>1e-1*r) & (overlap==False) & (rise==True)): 
#					print g.lcfit.model,tp,p
					c.append(i)
					print g.grb,flux[0], under[0], datastart, tstart, tstop, p[wf-1],t1, t2, tp[0], g.lcfit.model, mo
#				tp=np.argmax(flux)
				ratio.append(r)
				i=i+1

	grb=np.array(grb)
	fluence=np.array(fluence)
	ratio=np.array(ratio)
	outtstart=np.array(outtstart)
	outtstop=np.array(outtstop)


	plot.figure()
	plot.plot(fluence,ratio,marker='o',linestyle='None')
	x=np.logspace(-1,6,10)
	y=1e4*x**-1.
	print x,y
	plot.plot(x,y)
	c=np.array(c)
	plot.plot(fluence[c],ratio[c],marker='o',linestyle='None',color='red')
	plot.xscale('log')
	plot.yscale('log')
	plot.xlabel(r'Fluence (0.3-10 keV erg cm$^{-2}$)')
	plot.ylabel('Flare Peak/Underlying Power law Flux')

	plot.show()

	flares=Table([grb,outtstart,outtstop,fluence,ratio],names=('GRB','TSTART','TSTOP','FLUENCE','RATIO'))

	return flares