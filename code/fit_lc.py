#!/usr/bin/env python
"""
------------------------------------------------------------------------

Light curve fitting

------------------------------------------------------------------------
"""

import numpy as np
from astropy.io import ascii
from astropy.io import fits
from astropy.table import Table,Column,join
import math
import os
import matplotlib.pylab as plot
import fit_functions
import re
import time
from scipy.optimize import curve_fit
from scipy import stats
import glob

def fit_lcs(dir=None):
	# see which GRBs not yet fit and fit them
	# norris differentiate

	if dir==None:
		dir=''
		nd,d=grbfits_status()
	else:
		nd=[dir]
		g=dir

	print("Let's fit GRB LCs")
	for g in nd:
		print(g)
		if dir=='': dir=g+'/'
		gtitle=re.split('/',g)[0]
		lc=read_lc(dir=dir)
		fig,ax1=plot_lcfit(lc=lc,noshow=True)
		ax1.set_title(gtitle+' - Right click to continue')

		cp=Click(fig=fig)
		plot.show()
		dofit='Y'
		dofit=raw_input('Fit LC? (Y/n/s) ').upper()
		if dofit=='S': return
		if dofit=='N':
			write_lcfit(0,nofit=True,dir=dir)
		else:
			redo='Y'
			ft=None
			while redo == 'Y':
				p,ft=fit_the_lc(dir=dir,ft=ft)
#				print ft
				redo=raw_input('Redo the fit? (y/N) ').upper()
		dir=''

def ftest(chisq1,chisq2,oldterms,numpoints,addterms):

	df=numpoints-(oldterms+addterms)
	f=(chisq1-chisq2)/(chisq2/df)

	p=1.-stats.f.cdf(f,1,df)

	sig=stats.norm.ppf((1.+(1-p))/2.)
	## need to convert to prob, sig
	return f,p,sig

def grbfits_status(dir=None):
	if not dir:
		cwd=os.getcwd()
		if 'GRBfits/GRBs' not in cwd:	
			print('You should be in the GRBfits/GRBs/ directory')
			return

	grbs=glob.glob('GRB*')

	dg=glob.glob('GRB*/lc_fit_out_py_int1.dat')
	donegrbs=[]
	for g in dg:
		splits=re.split('/',g)
		donegrbs=np.append(donegrbs,splits[0])

	notdonegrbs=[]
	for g in grbs:
		if g not in donegrbs:
			notdonegrbs=np.append(notdonegrbs,g)

	print('Done GRBs = '+str(len(donegrbs)))
	print('Not Done GRBs = '+str(len(notdonegrbs)))
	return notdonegrbs,donegrbs

def fit_the_lc(grbdict=None,lc=None,norris=True,dir=None,ft=None):

# 	if grbdict:
# 		lc=grbdict.lc
# #		p=grbdict.lcfit
# 	else:
# 		if not lc:
# 			print('Need to specify either GRB dictionary or lc')
# 			return

	if not dir and not lc:
 		print('Need to specify either GRB directory or lc')
 		return

 	if dir and (type(lc) == type(None)):
 		lc=read_lc(dir=dir+'/')

 	if not dir:
 		dir=''

	p0,model,fmodel,pnames=click_initial_conditions(lc=lc,norris=norris)
	print('Fitting '+model+':')
	det=np.where(lc['Ratepos']>0)
	tt=np.array([lc['Time'][det]+lc['T_-ve'][det],lc['Time'][det]+lc['T_+ve'][det]])
	t=np.array(lc['Time'][det])
	rate=lc['Rate'][det]
#	popt, pcov=curve_fit(fmodel[model],t,lc['Rate'][det],p0=p0,sigma=lc['Ratepos'][det])
	popt, pcov=curve_fit(fmodel['int'+model],tt,rate,p0=p0,sigma=lc['Ratepos'][det])
	perr = np.sqrt(np.diag(pcov))
	plot.close()

	print('Result par, val, err:')
	print(pnames)
	print(popt)
	print(perr)
	yfit=fmodel[model](t,*popt)


	chisq=sum(((yfit-rate)/lc['Ratepos'][det])**2)
	dof=len(rate)-len(p0)
	
	p=fit_params(model,pnames,popt,perr,perr,chisq,dof)

	print('Num data = '+str(len(rate)))
	print('Chisq/dof = '+str(round(chisq,2))+' / '+str(dof)+' = '+str(chisq/dof))
	ftnew=np.array([chisq,len(rate),len(popt)])

	if type(ft) != type(None):
		ftresults=ftest(ft[0],ftnew[0],ft[2],ft[1],ftnew[2]-ft[2])
		print('F-test: f = '+str(ftresults[0])+', p = '+str(ftresults[1])+', sig = '+str(ftresults[2]))
	
	ft=ftnew

	fig,ax1=plot_lcfit(lc=lc,noshow=True,p=p)
	# sind=0
	# ylim=ax1.get_ylim()

	# for s in p.pnames: 
	# 	if 'break' in s:
	# 		ax1.plot([p.par[sind],p.par[sind]],ylim,linestyle='--',color='grey')
	# 	sind=sind+1
	# ax1.set_ylim(ylim)
	# ax1.plot(np.array(lc['Time']),yfit,color='orange')
	# ax1.set_title('Final Fit - Right click to continue')
	# nump=len(pnames)
	# for i in range(0,nump):
	# 	ax1.annotate(pnames[i]+' = '+str(popt[i])+' +/- '+str(perr[i]),xy=(0.03,0.03+0.03*(nump-i)),xycoords='axes fraction',fontsize=8)

	plot.savefig(dir+'lc_fit_plot.png', bbox_inches='tight')

	cp=Click(fig=fig)

	plot.show()

	### need to add breaks to plots
	### need to write out fit params (add write function to object)
	write_lcfit(p,dir=dir+'/')
	#need to writeout final plot
	# need to make it possible to fit flares with gaussians

	return p,ft

def lc_linfit(xx,yy,breaks,xflares=None,norris=False):

	x=xx
	y=yy
	if type(xflares) != type(None):
		for xf in xflares:
#			wx=np.where((x<xf*0.9) or (x>xf*1.1))
			wx=np.append(np.where((x<xf*0.7)),np.where((x>xf*3)))
			x=x[wx]
			y=y[wx]

	bks=np.hstack((min(x)-1,breaks,max(x)))
	yfit=[]
	for i in range(len(bks)-1):
		w=np.where((x > bks[i]) & (x <= bks[i+1]))
		m,b = plot.polyfit(np.log10(x[w]), np.log10(y[w]), 1)
		if i == 0: 
			norm=10**b
			p=np.array(norm)
			pnames=np.array('norm')
		yfit=np.append(yfit,10**b*x[w]**m)
		p=np.hstack((p,-m,bks[i+1]))
		pnames=np.hstack((pnames,'pow'+str(i+1),'break'+str(i+1)))

	p=p[0:len(p)-1]
	pnames=pnames[0:len(pnames)-1]
	if type(xflares) != type(None):
		for i in range(1,len(xflares)+1):
			if norris:
				#A, t1, t2, ts
				pnames=np.append(pnames,np.array(['norm'+str(i),'ts_'+str(i),'t1_'+str(i),'t2_'+str(i)]))
			else:
				pnames=np.append(pnames,np.array(['norm'+str(i),'center'+str(i),'width'+str(i)]))				

	return p,yfit,pnames

def click_initial_conditions(dir=None,lc=None,showplot=False,norris=False):

	## initial_guess N flares
	## initial_guess N breaks
	## get model
	## do rough fit with breaks only?

	xflares,yflares=initial_guess(dir=dir,lc=lc,flares=True)
	xbreaks,ybreaks=initial_guess(dir=dir,lc=lc,breaks=True)

	print(str(len(xflares))+' Flare, '+str(len(xbreaks))+' Breaks')
	redo='Y'
	while redo == 'Y':
		redo=raw_input('Redo flares guesses? (y/N) ').upper()
		if redo == 'Y': 
			xdata,ydata=[[],[]]
			xflares,yflares=[[],[]]
			xflares,yflares=initial_guess(dir=dir,lc=lc,flares=True)
			print(str(len(xflares))+' Flares @ '+str(xflares))
	redo='Y'
	while redo == 'Y':
		redo=raw_input('Redo breaks guesses? (y/N) ').upper()
		if redo == 'Y': 
			xdata,ydata=[[],[]]
			xbreaks,ybreaks=[[],[]]
			xbreaks,ybreaks=initial_guess(dir=dir,lc=lc,breaks=True)
			print(str(len(xbreaks))+' Breaks @ '+str(xbreaks))

	numflares=len(xflares)
	numbreaks=len(xbreaks)
	model,fmodel=fit_models(numflares,numbreaks,norris=norris)
	print('Model: ' +model)

	pflares=[]
	for i in range(numflares):
		if norris:
			## assume A, ts, t1, t2 
			width=xflares[i]*1.3
			t2=xflares[i]/4.
			t1=((((width/t2)**2)-9)/12.)**2*t2
			ts=xflares[i]-np.sqrt(t1*t2)
			pflares=np.append(pflares,[yflares[i]/5.,ts,t1,t2])
		else:
			pflares=np.append(pflares,[yflares[i],xflares[i],0.2*xflares[i]])

	det=np.where(lc['Ratepos']>0)
	t=lc['Time'][det]
	r=lc['Rate'][det]

	p,yfit,pnames=lc_linfit(t,r,xbreaks,xflares=xflares,norris=norris)
	p=np.append(p,pflares)
	print('Initial Guess for Model: ')
	print(pnames)
	print(p)

	if showplot:
		fig,ax1=plot_lcfit(lc=lc,noshow=True)
		ax1.plot(np.array(t),yfit,color='green')
		ax1.set_title('Initial Guess Fit - Right click to continue')
		cp=Click(fig=fig)
		plot.show()

	return p,model,fmodel,pnames

class Click:

	def __init__(self, fig=None):
	
		"""
		Constructor
		
		Arguments:
		fig -- a matplotlib figure
		"""
	
		if fig != None:
			self.fig = fig		
		else:
			self.fig = pyplot.get_current_fig_manager().canvas.figure
		self.nSubPlots = len(self.fig.axes)
		self.dragFrom = None
		self.markers = []
				
		self.retVal = {'x' : [], 'y' : []}

		self.fig.canvas.mpl_connect('button_press_event', self.onClick)

	def onClick(self, event):
	
		"""
		Process a mouse click event. If a mouse is right clicked within a
		subplot, the return value is set to a (subPlotNr, xVal, yVal) tuple and
		the plot is closed. With right-clicking and dragging, the plot can be
		moved.
		
		Arguments:
		event -- a MouseEvent event
		"""		
		
		if event.button == 1:				
		
#			for i in range(self.nSubPlots):
#				subPlot = self.selectSubPlot(i)								
			marker = plot.axvline(event.xdata, 0, 1, linestyle='--', \
				linewidth=2, color='gray')
			self.markers.append(marker)

			self.fig.canvas.draw()
			self.retVal['x'] = np.append(self.retVal['x'],event.xdata)
			self.retVal['y'] = np.append(self.retVal['y'],event.ydata)

		if event.button == 3:
			plot.close()

	def clearMarker(self):
	
		"""Remove marker from retVal and plot"""
		
		self.retVal['x'] = []
		self.retVal['y'] = []
#		for i in range(self.nSubPlots):
#			subPlot = self.selectSubPlot(i)
#		for marker in self.markers:
#			if marker in subPlot.lines:
#			marker.lines.remove(marker)				
		self.markers = []
		self.fig.canvas.draw()

	def show(self):
	
		"""
		Show the plot
		
		Returns:
		A dictionary with information about the response
		"""
		self.clearMarker()
		plot.show()
		return self.retVal

def initial_guess(dir=None,lc=None,flares=False,breaks=False):

	if dir != None:
		lc=read_lc(dir=dir)

	fig,ax1=plot_lcfit(lc=lc,noshow=True)
	if flares:
		ax1.set_title('Click guess for FLARES, right click when finished')
	if breaks:
		ax1.set_title('Click guess for BREAKS, right click when finished')		

	ylim=ax1.get_ylim()

	cp=Click(fig=fig)

	plot.show()
	plot.close('all')

	xdata=cp.retVal['x']
	ydata=cp.retVal['y']

	return xdata,ydata

def fit_models(numflares,numbreaks,norris=False):

	## norm + numflares*3 + numbreaks*2-1
#	nump=1 + numflares*3 + numbreaks*2+1
#	if numbreaks == 0: nump=nump+2

	if norris:
		g='Norris'
	else:
		g='gauss'

	if numbreaks == 0: model='pow'
	if numbreaks == 1: model='bknpow'
	if numbreaks > 1: model='bkn'+str(numbreaks)+'pow'
	if numflares > 0: model=g+str(numflares)+'_'+model

	# if nump == 2: model='pow'
	# if nump == 4: model='bknpow'
	# if nump == 5: model=g+'1_pow'
	# if nump == 6: model='bkn2pow'
	# if nump == 7: model=g+'1_bknpow'
	# if nump == 8: 
	# 	model='bkn3pow'
	# 	if numflares == 2: model=g+'2_pow'
	# if nump == 9: model=g+'1_bkn2pow'
	# if nump == 10:
	# 	model='bkn4pow'
	# 	if numflares == 2: model=g+'2_bknpow'
	# if nump == 11:
	# 	if numflares == 3: model=g+'3_pow'
	# 	if numflares == 1: model=g+'1_bkn3pow'
	# if nump == 12: model=g+'2_bkn2pow'
	# if nump == 13: 
	# 	if numflares == 3: model=g+'3_bknpow'
	# 	if numflares == 1: model=g+'1_bkn4pow'
	# if nump == 14: 
	# 	if numflares == 4: model=g+'4_pow'
	# 	if numflares == 2: model=g+'2_bkn3pow'
	# if nump == 15: model=g+'3_bkn2pow'
	# if nump == 16:  
	# 	if numflares == 4: model=g+'4_bknpow'
	# 	if numflares == 2: model=g+'2_bkn4pow'
	# if nump == 17:  
	# 	if numflares == 5: model=g+'5_pow'
	# 	if numflares == 3: model=g+'3_bkn3pow'
	# if nump == 18: model=g+'4_bkn2pow'
	# if nump == 19:  
	# 	if numflares == 5: model=g+'5_bknpow'
	# 	if numflares == 3: model=g+'3_bkn4pow'
	# if nump == 20:  
	# 	if numflares == 6: model=g+'6_pow'
	# 	if numflares == 4: model=g+'4_bkn3pow'
	# if nump == 21: model=g+'5_bkn2pow'
	# if nump == 22:  
	# 	if numflares == 6: model=g+'6_bknpow'
	# 	if numflares == 4: model=g+'4_bkn4pow'
	# if nump == 23:  
	# 	if numflares == 7: model=g+'7_pow'
	# 	if numflares == 5: model=g+'5_bkn3pow'
	# if nump == 24: model=g+'6_bkn2pow'
	# if nump == 25:  
	# 	if numflares == 7: model=g+'7_bknpow'
	# 	if numflares == 5: model=g+'5_bkn4pow'
	# if nump == 26: model=g+'6_bkn3pow'
	# if nump == 27: model=g+'7_bkn2pow'
	# if nump == 28: model=g+'6_bkn4pow'
	# if nump == 29: model=g+'7_bkn3pow'
	# if nump == 31: model=g+'7_bkn4pow'

	function_model={
		'gauss': fit_functions.gauss,
		'Norris': fit_functions.Norris,
		'pow': fit_functions.pow,
		'gauss1_pow': fit_functions.gauss1_pow,
		'gauss2_pow': fit_functions.gauss2_pow,
		'gauss3_pow': fit_functions.gauss3_pow,
		'gauss4_pow': fit_functions.gauss4_pow,
		'gauss5_pow': fit_functions.gauss5_pow,
		'gauss6_pow': fit_functions.gauss6_pow,
		'Norris1_pow': fit_functions.Norris1_pow,
		'Norris2_pow': fit_functions.Norris2_pow,
		'Norris3_pow': fit_functions.Norris3_pow,
		'Norris4_pow': fit_functions.Norris4_pow,
		'Norris5_pow': fit_functions.Norris5_pow,
		'Norris6_pow': fit_functions.Norris6_pow,
		'bknpow': fit_functions.bknpow,
		'gauss1_bknpow': fit_functions.gauss1_bknpow,
		'gauss2_bknpow': fit_functions.gauss2_bknpow,
		'gauss3_bknpow': fit_functions.gauss3_bknpow,
		'gauss4_bknpow': fit_functions.gauss4_bknpow,
		'gauss5_bknpow': fit_functions.gauss5_bknpow,
		'gauss6_bknpow': fit_functions.gauss6_bknpow,
		'Norris1_bknpow': fit_functions.Norris1_bknpow,
		'Norris2_bknpow': fit_functions.Norris2_bknpow,
		'Norris3_bknpow': fit_functions.Norris3_bknpow,
		'Norris4_bknpow': fit_functions.Norris4_bknpow,
		'Norris5_bknpow': fit_functions.Norris5_bknpow,
		'Norris6_bknpow': fit_functions.Norris6_bknpow,
		'bkn2pow': fit_functions.bkn2pow,
		'gauss1_bkn2pow': fit_functions.gauss1_bkn2pow,
		'gauss2_bkn2pow': fit_functions.gauss2_bkn2pow,
		'gauss3_bkn2pow': fit_functions.gauss3_bkn2pow,
		'gauss4_bkn2pow': fit_functions.gauss4_bkn2pow,
		'gauss5_bkn2pow': fit_functions.gauss5_bkn2pow,
		'gauss6_bkn2pow': fit_functions.gauss6_bkn2pow,
		'Norris1_bkn2pow': fit_functions.Norris1_bkn2pow,
		'Norris2_bkn2pow': fit_functions.Norris2_bkn2pow,
		'Norris3_bkn2pow': fit_functions.Norris3_bkn2pow,
		'Norris4_bkn2pow': fit_functions.Norris4_bkn2pow,
		'Norris5_bkn2pow': fit_functions.Norris5_bkn2pow,
		'Norris6_bkn2pow': fit_functions.Norris6_bkn2pow,
		'bkn3pow': fit_functions.bkn3pow,
		'gauss1_bkn3pow': fit_functions.gauss1_bkn3pow,
		'gauss2_bkn3pow': fit_functions.gauss2_bkn3pow,
		'gauss3_bkn3pow': fit_functions.gauss3_bkn3pow,
		'gauss4_bkn3pow': fit_functions.gauss4_bkn3pow,
		'gauss5_bkn3pow': fit_functions.gauss5_bkn3pow,
		'gauss6_bkn3pow': fit_functions.gauss6_bkn3pow,
		'Norris1_bkn3pow': fit_functions.Norris1_bkn3pow,
		'Norris2_bkn3pow': fit_functions.Norris2_bkn3pow,
		'Norris3_bkn3pow': fit_functions.Norris3_bkn3pow,
		'Norris4_bkn3pow': fit_functions.Norris4_bkn3pow,
		'Norris5_bkn3pow': fit_functions.Norris5_bkn3pow,
		'Norris6_bkn3pow': fit_functions.Norris6_bkn3pow,
		'bkn4pow': fit_functions.bkn4pow,
		'gauss1_bkn4pow': fit_functions.gauss1_bkn4pow,
		'gauss2_bkn4pow': fit_functions.gauss2_bkn4pow,
		'gauss3_bkn4pow': fit_functions.gauss3_bkn4pow,
		'gauss4_bkn4pow': fit_functions.gauss4_bkn4pow,
		'gauss5_bkn4pow': fit_functions.gauss5_bkn4pow,
		'gauss6_bkn4pow': fit_functions.gauss6_bkn4pow,
		'Norris1_bkn4pow': fit_functions.Norris1_bkn4pow,
		'Norris2_bkn4pow': fit_functions.Norris2_bkn4pow,
		'Norris3_bkn4pow': fit_functions.Norris3_bkn4pow,
		'Norris4_bkn4pow': fit_functions.Norris4_bkn4pow,
		'Norris5_bkn4pow': fit_functions.Norris5_bkn4pow,
		'Norris6_bkn4pow': fit_functions.Norris6_bkn4pow,
		### integral functions
		'intgauss': fit_functions.gauss,
		'intpow': fit_functions.intpow,
		'intgauss1_pow': fit_functions.intgauss1_pow,
		'intgauss2_pow': fit_functions.intgauss2_pow,
		'intgauss3_pow': fit_functions.intgauss3_pow,
		'intgauss4_pow': fit_functions.intgauss4_pow,
		'intgauss5_pow': fit_functions.intgauss5_pow,
		'intgauss6_pow': fit_functions.intgauss6_pow,
		'intNorris1_pow': fit_functions.intNorris1_pow,
		'intNorris2_pow': fit_functions.intNorris2_pow,
		'intNorris3_pow': fit_functions.intNorris3_pow,
		'intNorris4_pow': fit_functions.intNorris4_pow,
		'intNorris5_pow': fit_functions.intNorris5_pow,
		'intNorris6_pow': fit_functions.intNorris6_pow,
		'intbknpow': fit_functions.intbknpow,
		'intgauss1_bknpow': fit_functions.intgauss1_bknpow,
		'intgauss2_bknpow': fit_functions.intgauss2_bknpow,
		'intgauss3_bknpow': fit_functions.intgauss3_bknpow,
		'intgauss4_bknpow': fit_functions.intgauss4_bknpow,
		'intgauss5_bknpow': fit_functions.intgauss5_bknpow,
		'intgauss6_bknpow': fit_functions.intgauss6_bknpow,
		'intNorris1_bknpow': fit_functions.intNorris1_bknpow,
		'intNorris2_bknpow': fit_functions.intNorris2_bknpow,
		'intNorris3_bknpow': fit_functions.intNorris3_bknpow,
		'intNorris4_bknpow': fit_functions.intNorris4_bknpow,
		'intNorris5_bknpow': fit_functions.intNorris5_bknpow,
		'intNorris6_bknpow': fit_functions.intNorris6_bknpow,
		'intbkn2pow': fit_functions.intbkn2pow,
		'intgauss1_bkn2pow': fit_functions.intgauss1_bkn2pow,
		'intgauss2_bkn2pow': fit_functions.intgauss2_bkn2pow,
		'intgauss3_bkn2pow': fit_functions.intgauss3_bkn2pow,
		'intgauss4_bkn2pow': fit_functions.intgauss4_bkn2pow,
		'intgauss5_bkn2pow': fit_functions.intgauss5_bkn2pow,
		'intgauss6_bkn2pow': fit_functions.intgauss6_bkn2pow,
		'intNorris1_bkn2pow': fit_functions.intNorris1_bkn2pow,
		'intNorris2_bkn2pow': fit_functions.intNorris2_bkn2pow,
		'intNorris3_bkn2pow': fit_functions.intNorris3_bkn2pow,
		'intNorris4_bkn2pow': fit_functions.intNorris4_bkn2pow,
		'intNorris5_bkn2pow': fit_functions.intNorris5_bkn2pow,
		'intNorris6_bkn2pow': fit_functions.intNorris6_bkn2pow,
		'intbkn3pow': fit_functions.intbkn3pow,
		'intgauss1_bkn3pow': fit_functions.intgauss1_bkn3pow,
		'intgauss2_bkn3pow': fit_functions.intgauss2_bkn3pow,
		'intgauss3_bkn3pow': fit_functions.intgauss3_bkn3pow,
		'intgauss4_bkn3pow': fit_functions.intgauss4_bkn3pow,
		'intgauss5_bkn3pow': fit_functions.intgauss5_bkn3pow,
		'intgauss6_bkn3pow': fit_functions.intgauss6_bkn3pow,
		'intNorris1_bkn3pow': fit_functions.intNorris1_bkn3pow,
		'intNorris2_bkn3pow': fit_functions.intNorris2_bkn3pow,
		'intNorris3_bkn3pow': fit_functions.intNorris3_bkn3pow,
		'intNorris4_bkn3pow': fit_functions.intNorris4_bkn3pow,
		'intNorris5_bkn3pow': fit_functions.intNorris5_bkn3pow,
		'intNorris6_bkn3pow': fit_functions.intNorris6_bkn3pow,
		'intbkn4pow': fit_functions.intbkn4pow,
		'intgauss1_bkn4pow': fit_functions.intgauss1_bkn4pow,
		'intgauss2_bkn4pow': fit_functions.intgauss2_bkn4pow,
		'intgauss3_bkn4pow': fit_functions.intgauss3_bkn4pow,
		'intgauss4_bkn4pow': fit_functions.intgauss4_bkn4pow,
		'intgauss5_bkn4pow': fit_functions.intgauss5_bkn4pow,
		'intgauss6_bkn4pow': fit_functions.intgauss6_bkn4pow,
		'intNorris1_bkn4pow': fit_functions.intNorris1_bkn4pow,
		'intNorris2_bkn4pow': fit_functions.intNorris2_bkn4pow,
		'intNorris3_bkn4pow': fit_functions.intNorris3_bkn4pow,
		'intNorris4_bkn4pow': fit_functions.intNorris4_bkn4pow,
		'intNorris5_bkn4pow': fit_functions.intNorris5_bkn4pow,
		'intNorris6_bkn4pow': fit_functions.intNorris6_bkn4pow,
	}

	return model,function_model#[model]

def plot_lcfit(grbdict=None,lc=None,p=None,resid=True,noshow=False):

### if no p, plot without

	if grbdict:
		lc=grbdict.lc
		p=grbdict.lcfit
	else:
		if not lc:
			print('Need to specify GRB dictionary or lc')
			return

	if p:
		if resid: 
			f,(ax1,ax2) = plot.subplots(2,sharex=True)
	else: 
		resid=False
		f,ax1=plot.subplots(1)

	xrttype=np.array(['WTSLEW','WT','WTUL','PC','PCUL'])
	color=np.array(['cyan','blue','blue','red','red'])

	tlim=[10**round(np.log10(min(lc['Time']+lc['T_-ve']))-0.5),10**round(np.log10(max(lc['Time']+lc['T_+ve']))+0.5)]

	for t in range(len(xrttype)):
		w=np.where(lc['Type']==xrttype[t])
		if len(w[-1])>0:

			if 'UL' in xrttype[t]: 
				uplims=True
				yerr=0.8*lc['Rate'][w]
				noleg='_'
			else:
				uplims=False
				yerr=[-lc['Rateneg'][w],lc['Ratepos'][w]]
				noleg=''

			ax1.errorbar(lc['Time'][w],lc['Rate'][w],xerr=[-lc['T_-ve'][w],lc['T_+ve'][w]],\
				yerr=yerr,ecolor=color[t],linestyle='None',\
				capsize=0,label=noleg+xrttype[t],uplims=uplims,fmt='none')

			if p:
				if resid: 
					yfit=fit_functions.call_function(p.model,lc['Time'][w],*p.par)
					res=lc['Rate'][w]/yfit
					ax2.errorbar(lc['Time'][w],res,xerr=[-lc['T_-ve'][w],lc['T_+ve'][w]],\
						yerr=yerr/yfit,linestyle='None',capsize=0,fmt='none',ecolor=color[t],\
						uplims=uplims,label=noleg+xrttype[t])
					ax2.plot(tlim,[1,1],linestyle='--',color='black')
					f.subplots_adjust(hspace=0)

	if p:
		print(p.model)
#		yfit=getattr(importlib.import_module('fit_functions'),p.model)(lc['Time'],p.par)
		t=np.append(np.array(lc['Time']),p.par[2+np.arange(p.numbreaks)*2])
		t.sort()
		yfit=fit_functions.call_function(p.model,t,*p.par)
		ax1.plot(t,yfit,color='green',label=p.model+' fit')
		nump=len(p.pnames)
		for i in range(0,nump):
		 	ax1.annotate(p.pnames[i]+' = '+str(round(p.par[i],2))+' +/- '+str(round(p.perror[i][0],2)),xy=(0.02,0.02+0.05*(nump-i)),xycoords='axes fraction',fontsize=8)

	ax1.legend(loc="upper right")
	ax1.set_yscale('log')
	ax1.set_xscale('log')
	ax1.set_ylabel(r'Count Rate (0.3-10 keV) (erg cm$^{-2}$ s$^{-1}$)')
#	ylim=ax1.get_ylim()
#	ax1.set_ylim([10**round(np.log10(ylim[0])-0.5),10**round(np.log10(ylim[1])+0.5)])
	ax1.yaxis.set_tick_params(right='on',which='both')
	if resid:
		ax2.set_xscale('log')
		ax2.set_xlabel('Time since trigger (s)')
		ax2.set_ylabel('Residual')
		ax2.set_ylim([0,3])
	else:
		ax1.set_xlabel('Time since trigger (s)')

	if noshow == False:
		plot.show()
		plot.close('all')

	return f,ax1

def write_lcfit(p,dir=None,file=None,nofit=False):

	if not dir:
		dir='./'
	if not file:
		file=dir+'lc_fit_out_py_int1.dat'
	f=open(file,'w')
	if nofit==False:
		nump=len(p.pnames)
		for i in range(nump):
			f.write(p.pnames[i]+' '+str(p.par[i])+' '+str(p.perror[i][0])+' '+str(p.perror[i][1])+'\n')
		f.write('Chisq '+str(p.chisq)+'\n')
		f.write('dof '+str(p.dof)+'\n')
	else:
		f.write('no fit\n')
	f.close()

def read_lcfit(dir=None,file=None):

	if not file: file=dir+'lc_fit_out_idl_int9.dat'
	if not os.path.exists(file):
		print('No fit file: '+file)
		p=0
	else:
		f=open(file,'r')
		lines=f.readlines()
		pnames=[]
		par=[]
		pneg=[]
		ppos=[]
		chisq=[]
		dof=[]
		go=0
		for line in lines:
			tmp=line.split()
			if tmp[0] == 'no': break
			if len(tmp) > 2:
				pnames.append(tmp[0])
				par.append(float(tmp[1]))
				pneg.append(float(tmp[2]))
				ppos.append(float(tmp[3]))
			if (len(tmp) == 2) & go==0:
				chisq=float(tmp[1])
				go=1
			if (len(tmp) == 2) & (go==1):
				dof=float(tmp[1])
				continue

		nump=len(par)
		nf=len([p for p in pnames if 'g' in p])
		model='nofit'
		model,fmodel=fit_models(nump,nf,norris=norris)

		p=fit_params(model,pnames,par,pneg,ppos,chisq,dof)
	
	return p

class grb_object:

	def __init__(self,grb,targid,trigtime,met,lc,p,s):

		self.grb=grb
		self.targid=targid
		self.trigtime=trigtime
		self.met=met
		self.lc=lc
		self.lcfit=p
		self.specfit=s
	#	self=Table(names=('grb','targid','trigtime','met','z','lcfit','lc')) 

	def keys(self):
		print(['grb','targid','trigtime','met','lc','p','s'])

def load_data(dir=None):

	## Read curve.qdp header for GRB name, trigger number, & trigger time

	if dir ==None:
		dir='/Users/jracusin/GRBs/'
	grbs,targids=download_UL()
	mets=[]
	trigtimes=[]
	i=0
	grblist=[]
	grbdict={}

	for grb in grbs:
		curve_file=dir+grb+'/curve.qdp'

		if os.path.exists(curve_file):
			f=open(curve_file,'r')
			lines=f.readlines()
			tmp=re.split(',|=| ',lines[1])
			#print grb,tmp[9]
			if any("T0 for this burst is Swift" in t for t in tmp):
				met=float(tmp[9])
				trigtime=tmp[14]+'-'+str(time.strptime(tmp[15],'%b').tm_mon)+'-'+tmp[16]+' '+tmp[18]
			else:
				met=-1
				trigtime=''

			mets=np.append(mets,met)
			trigtimes=np.append(trigtimes,trigtime)

			targid=targids[i]
			lc=read_lc(dir+grb+'/')
			p=read_lcfit(dir+grb+'/')
			s=read_specfit(dir=dir)

			## create GRB object
			g=grb_object(grb,targid,trigtime,met,lc,p,s)
			## add to list
			grblist.append(g)
			## add to dictionaries of objects
			grbdict[g.grb]=g
		i=i+1
		
	## make record array
	c1=fits.Column(name='grb',format='10A',array=grbs)
	c2=fits.Column(name='targid',format='8A',array=targids)
	c3=fits.Column(name='trigtime',format='23A',array=trigtimes)
	c4=fits.Column(name='met',format='D',array=mets)
	coldefs = fits.ColDefs([c1, c2, c3, c4])
	tbhdu = fits.BinTableHDU.from_columns(coldefs)
	grbrec=tbhdu.data



	return grbdict,grbrec,grblist

		# self.grb=grbs
		# self.targid=targids
		# self.met=met
		# self.trigtime=trigtime

		# self.lc=lc
		### loop through and read in each GRB
		## can put in cuts like z-only, xrt-only, lat-only, gbm-only

### have object for each GRB
### have dictionary accessing each object by GRB name?
### need list or dictionary of dictionaries?

### create fits record array of all params
### have function to grab object for that GRB with fit params & LC?

class specfit_params:

	def __init__(self,mode,galnh,nh,nh_err_neg,nh_err_pos,gamma,gamma_err_neg,gamma_err_pos,\
		flux,flux_err_neg,flux_err_pos,unabs_flux,unabs_flux_err_neg,unabs_flux_err_pos,\
		cstat,dof,rate,corr,ontime):

#		self.mode=mode
		self.galnh=galnh
		self.nh=nh
		self.nh_err=[nh_err_neg,nh_err_pos]
		self.gamma=gamma
		self.gamma_err=[gamma_err_neg,gamma_err_pos]
		self.flux=flux
		self.flux_err=[flux_err_neg,flux_err_pos]
		self.unabs_flux=unabs_flux
		self.unabs_flux_err=[unabs_flux_err_neg,unabs_flux_err_pos]
		self.cstat=cstat
		self.dof=dof
		self.rate=rate
		self.corr=corr
		self.ontime=ontime

def read_specfit(dir=''):

	files=np.array(['interval0wt_fit.fit','interval0pc_fit.fit','late_timepc_fit.fit'])
	modes=['WT','PC','PCLATE']

	nfiles=len(files)
	if (len(dir)>0) & ('/' not in dir): 
		dir=dir+'/'

	spec={}
	i=0
	for file in files:
		if os.path.exists(dir+file):
#			print(file)
			f=open(dir+file,'r')
			lines=f.readlines()
			l=0
			mode=modes[i]
			for line in lines:
				tmp=re.split('\n|\t| |,|\(|\)|=|:',line)
				tmp=filter(None,tmp)
#				print tmp
				if l == 0: galnh=float(tmp[1])
				if l == 1: 
					nh=float(tmp[1])
					nh_err_neg=0
					nh_err_pos=0
					if float(tmp[2]) != 0.: 
						nh_err_neg=nh-float(tmp[2])
					if float(tmp[3]) != 0.: 
						nh_err_pos=float(tmp[3])-nh
				if l == 2:
					gamma=float(tmp[1])
					gamma_err_neg=0
					gamma_err_pos=0
					if float(tmp[2]) != 0.:
						gamma_err_neg=gamma-float(tmp[2])
					if float(tmp[3]) != 0.:
						gamma_err_pos=float(tmp[3])-gamma
				if l == 3:
					flux=float(tmp[2])
					flux_err_neg=1.
					flux_err_pos=1.
					if float(tmp[3]) != 1.:
						flux_err_neg=flux-float(tmp[3])
					if float(tmp[4]) != 1.:
						flux_err_pos=float(tmp[4])-flux
				if l == 4:
					unabs_flux=float(tmp[2])
					unabs_flux_err_neg=1.
					unabs_flux_err_pos=1.
					if float(tmp[3]) != 1.:
						unabs_flux_err_neg=unabs_flux-float(tmp[3])
					if float(tmp[4]) != 1.:
						unabs_flux_err_pos=float(tmp[4])-unabs_flux
				if l == 5:
					cstat=float(tmp[1])
					dof=float(tmp[3])
				if l == 6:
					rate=float(tmp[3])
				if l == 7:
					corr=float(tmp[2])
				if l == 8:
					ontime=tmp[1]

				l=l+1

			s=specfit_params(mode,galnh,nh,nh_err_neg,nh_err_pos,gamma,gamma_err_neg,gamma_err_pos,\
				flux,flux_err_neg,flux_err_pos,unabs_flux,unabs_flux_err_neg,unabs_flux_err_pos,\
				cstat,dof,rate,corr,ontime)
			i=i+1
			#spec.append(s)  ## list
			spec[mode]=s

	## make list of specfit objects

	return spec

class fit_params:
	
	def __init__(self,model,pnames,par,perror_neg,perror_pos,chisq,dof):
		self.model=model
		self.pnames=pnames
		self.par=par
		perror=np.array([perror_neg,perror_pos])
		perror=perror.transpose()
		self.perror=perror
		self.chisq=chisq
		self.dof=dof
		if 'pow' not in model: 
			bk=re.split('bkn|pow',model)
			wbk='bkn' in bk
			self.numbreaks=int(bk[wbk+1])
		else:
			self.numbreaks=0
		if ('gauss' in model) or ('Norris' in model):
			fl=re.split('gauss|Norris|_',model)
			self.numflares=int(fl[1])
		else:
			self.numflares=0

	def list(self):
		print('model = ',self.model)
		print('pnames = ',self.pnames)
		print('par = ',self.par)
		print('perror = ',self.perror)
		print('chisq = ',self.chisq)
		print('dof = ',self.dof)
		print('numflares = ',self.numflares)
		print('numbreaks = ',self.numbreaks)
	### to make list of object: plist=[fit_params(count) for count in xrange(n)]

def read_curve(file):

	f=open(file,'r')
	lines=f.readlines()
	header=[]
	start=0
	done=0
	data=[]
	for line in lines:
		tmp=line.split()
		if len(tmp) >0:
			if (tmp[1] == 'WTSLEW') & (not header):
				start=1
				continue
			if (tmp[1] == 'NO'):
				break
			if (start == 1) & (not header):
				header=tmp
#				header[0]='Time'
				d=Table(names=header)
				continue
			if (start == 1) & (len(header)>0):
				d.add_row(tmp)

	f.close()

	return d

def read_lc(dir=''):

	files=np.array(['WTCURVE.qdp','WTUL.qdp','PCCURVE.qdp','PCUL.qdp','curve.qdp'])
	type=np.array(['WT','WTUL','PC','PCUL','WTSLEW'])
	nfiles=len(files)
	if (len(dir)>0) & ('/' not in dir): 
		dir=dir+'/'

	start=0
	itworked=False
	for f in range(nfiles):
		if os.path.isfile(dir+files[f]):
#			print(files[f])
#			print f
			if f<=3:
				data=ascii.read(dir+files[f],header_start=2,data_start=3)
				ncol=len(data[0])
				ndata=len(data)
				if ncol >16:
					del data['SYS_NEG','SYS_POS']
				t=Column(np.repeat(type[f],ndata),name='Type')
				data.add_column(t)
				if start==0:
					d=data
					start=1
				else:
					d=join(d,data,join_type='outer')
#				print len(d)
			if f==4:
				if 'WTSLEW' in open(dir+files[f]).read():
					data=read_curve(dir+files[f])
					ndata=len(data)
					t=Column(np.repeat(type[f],ndata),name='Type')
					data.add_column(t)
					d=join(d,data,join_type='outer')
			itworked=True
#		print dir+files[f]

	if itworked: 
		d.rename_column('!Time','Time')
#		print 'what?'
	else: d=0

	return d

def download_UL(update=False,dir=None):

	import urllib

	# ### download trigIDs
	url="http://www.swift.ac.uk/xrt_curves/allcurves2.php"
	if dir == None:
		dir='/Users/jracusin/GRBs/'
	if os.path.exists(dir+'reftime.dat'):
		fref=open(dir+'reftime.dat','r')
		reftime=float(fref.read())
		fref.close()
	else:
		reftime=0.
#	reftime=1484340227.502976 ## Jan 13, 2017 - when this was written  time.time()

	filename=dir+'allcurves2.php'
	if not os.path.exists(filename) or update:
		if update: os.remove(filename)	
		urllib.urlretrieve(url,filename)
		#wget.download(url,filename)
		print 'downloading GRB list: ', filename
	f=open(filename,'r')
	lines=f.readlines()

	targids=[]
	grbs=[]
	for line in lines: 
		if "<td><p class='grb'>GRB" in line: 
			tmp=line
			tmp=re.split('<|>|/',line)
			targids=np.append(targids,tmp[10])
			grbs=np.append(grbs,tmp[4].replace(" ",""))

	# download LCs
	files=np.array(['curve.qdp','WTCURVE.qdp','WTUL.qdp','PCCURVE.qdp','PCUL.qdp',\
		'interval0wt_fit.fit','interval0pc_fit.fit','late_timepc_fit.fit'])
	### figure out spec files logic - right now won't download because curve.qdp exists

	for i in range(len(grbs)):
		grb=grbs[i]
		targid=targids[i]
		dir='/Users/jracusin/GRBs/'+grb+'/'
		if not os.path.exists(dir): os.makedirs(dir)
		fage=-1
		for file in files:
			if os.path.exists(dir+file):
				ftime=os.path.getmtime(dir+file)
				if file==files[0]:
					fage=ftime-reftime
				else: fage=0
			if 'qdp' in file: 
				lcspec='xrt_curves/'
			else: lcspec='xrt_spectra/'
			if fage < 0:  # if file created before reftime
				url="http://www.swift.ac.uk/"+lcspec+targid+"/"+file
				print 'downloading: ', url
				print dir+file
				urllib.urlretrieve(url,dir+file)
				#wget.download(url,dir+file)
			if os.path.exists(dir+file):
				f=open(dir+file,'r')
				lines=f.readlines()
				if any("404 page not found" in line for line in lines): 
					os.remove(dir+file)


	fref=open(dir+'reftime.dat','w')
	reftime=time.time()
	fref.write(str(reftime))
	fref.close()

	return grbs,targids