#!/usr/bin/env python

import numpy as np
import fit_lc
import matplotlib.pylab as plot
from astropy.cosmology import Planck15 as cosmo

def load_data(dir='/Users/jracusin/Swift/GRBfits/GRBs/'):

	grbdict,grbrec,grblist=fit_lc.load_data(dir=dir)

	return grbdict,grbrec,grblist


def plot_all_lcs(grblist,dir='/Users/jracusin/Swift/GRBfits/GRBs/',overgrb=None,rate=False,flux=False,lum=False):

#	grbdict,grbrec,grblist=fit_lc.load_data(dir=dir)

	if (not rate) & (not flux) & (not lum):
		print 'Must specifiy rate, flux, or lum'
		return


	ngrbs=len(grblist)

	time=[]
	rates=[]
	timeerrpos=[]
	timeerrneg=[]
	rateerrneg=[]
	rateerrpos=[]
	grbs=[]
	for i in range(ngrbs):
#		print grblist[i].grb
		fluxfact=0.
		z=0
		gamma=0
		grbs=np.append(grbs,grblist[i].grb)

		if 'WT' in grblist[i].specfit.keys():
			fluxfact=grblist[i].specfit['WT'].flux/grblist[i].specfit['WT'].rate
			z=grblist[i].specfit['WT'].z_abs
			gamma=grblist[i].specfit['WT'].z_abs
		if 'PC' in grblist[i].specfit.keys():
			fluxfact=grblist[i].specfit['PC'].flux/grblist[i].specfit['PC'].rate
			z=grblist[i].specfit['PC'].z_abs
			gamma=grblist[i].specfit['PC'].z_abs
		if rate:
			fluxfact=1
		z1=1. 

		if ((lum) & (z>0)):
			mpc2cm=3.08568025e24
			dist=cosmo.luminosity_distance(z)*mpc2cm
			fluxfact=fluxfact*4.*np.pi*dist.value**2*(1.+z)**(gamma-1.-1.)
			z1=1./(1+z)
		if ((lum) & (z==0)):
			fluxfact=0

		if fluxfact>0:
			time=np.append(time,np.array(grblist[i].lc['Time'])*z1)
			rates=np.append(rates,np.array(grblist[i].lc['Rate'])*fluxfact)
			timeerrpos=np.append(timeerrpos,np.array(grblist[i].lc['T_+ve'])*z1)
			timeerrneg=np.append(timeerrneg,np.array(grblist[i].lc['T_-ve'])*z1)
			rateerrneg=np.append(rateerrneg,np.array(grblist[i].lc['Rateneg'])*fluxfact)
			rateerrpos=np.append(rateerrpos,np.array(grblist[i].lc['Ratepos'])*fluxfact)


	time=np.array(time)
	rates=np.array(rates)
	timeerrpos=np.array(timeerrpos)
	timeerrneg=np.array(timeerrneg)
	rateerrpos=np.array(rateerrpos)
	rateerrneg=np.array(rateerrneg)
	w=np.where(rateerrpos>0)[0]

	plot.errorbar(time[w],rates[w],xerr=[-timeerrneg[w],timeerrpos[w]],\
				yerr=-rateerrneg[w],ecolor='grey',linestyle='None',capsize=0,fmt='none')
#	plot.plot(time,rate,color='grey',marker='+',line_style=None)

	if overgrb !=None:
		wgrb=np.where(overgrb == grbs)[0][0]
		if 'WT' in grblist[wgrb].specfit.keys():
			fluxfact=grblist[wgrb].specfit['WT'].flux/grblist[wgrb].specfit['WT'].rate
			z=grblist[wgrb].specfit['WT'].z_abs
			gamma=grblist[wgrb].specfit['WT'].z_abs
		if 'PC' in grblist[wgrb].specfit.keys():
			fluxfact=grblist[wgrb].specfit['PC'].flux/grblist[wgrb].specfit['PC'].rate
			z=grblist[wgrb].specfit['WT'].z_abs
			gamma=grblist[wgrb].specfit['WT'].z_abs

		if ((lum) & (z>0)):
			dist=cosmo.luminosity_distance(z)*mpc2cm
			fluxfact=fluxfact*4.*np.pi*dist.value**2*(1.+z)**(gamma-1.-1.)
			z1=1./(1+z)
		if ((lum) & (z==0)):
			fluxfact=0
#		print fluxfact,z,dist
		if fluxfact>0:
			time=np.array(grblist[wgrb].lc['Time'])*z1
			rates=np.array(grblist[wgrb].lc['Rate'])*fluxfact
			timeerrpos=np.array(grblist[wgrb].lc['T_+ve'])*z1
			timeerrneg=np.array(grblist[wgrb].lc['T_-ve'])*z1
			rateerrneg=np.array(grblist[wgrb].lc['Rateneg'])*fluxfact
			rateerrpos=np.array(grblist[wgrb].lc['Ratepos'])*fluxfact

		w=np.where(rateerrpos>0)[0]

		plot.errorbar(time[w],rates[w],xerr=[-timeerrneg[w],timeerrpos[w]],\
				yerr=-rateerrneg[w],ecolor='orange',linestyle='None',\
				capsize=0,fmt='none')


	plot.xscale('log')
	plot.yscale('log')
	plot.xlabel('Time since Trigger (sec)')
	if rate: 
		plot.ylabel(r'Count Rate (0.3-10 keV; counts s$^{-1}$)')
		whatunit='_rate'
	if flux: 
		plot.ylabel(r'Flux (0.3-10 keV; erg cm$^{-2}$ s$^{-1}$)')
		whatunit='_flux'
	if lum: 
		plot.ylabel(r'Luminosity (0.3-10 keV; erg s$^{-1}$)')
		whatunit='_lum'
	plot.savefig('All_XRT_LCs'+whatunit+'.png')
	plot.show()

#	return time, rate