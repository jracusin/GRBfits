#!/usr/bin/env python
"""
------------------------------------------------------------------------

Scripts to do power law functions
x & xx must be np.array with xx.transpose()

------------------------------------------------------------------------
"""

import numpy as np
import importlib
import math
import scipy.integrate as integrate

def call_function(function,x,*p):

	mod=importlib.import_module('fit_functions')
	func=getattr(mod,function)
	yfit=func(x,*p)
	
	return yfit

def logmean(x):

	m=10**((np.log10(x[0,:])+np.log10(x[1,:]))/2)+np.min(x)

	return m

def pow(x,*p):

	norm=p[0]
	pow1=p[1]

	f=norm*(x)**(-pow1)

	return f

def bknpow(x,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]

	#f=np.zeros(len(x))
	#f[x<break1]=norm*x[x<break1]**(-pow1)
	#f[x>=break1]=norm*break1**(pow2-pow1)*x[x>=break1]**(-pow2)

	f1=np.array([norm*x[x<break1]**(-pow1)])
	f2=np.array([norm*break1**(pow2-pow1)*x[x>=break1]**(-pow2)])
	f=np.append(f1,f2)

	return f

def bkn2pow(x,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]

	f=np.zeros(len(x))
	f[x<break1]=norm*x[x<break1]**(-pow1)
	f[(x>=break1)&(x<break2)]=norm*break1**(pow2-pow1)*x[(x>=break1)&(x<break2)]**(-pow2)
	f[x>=break2]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*x[x>=break2]**(-pow3)

	return f

def bkn3pow(x,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]
	break3=p[6]
	pow4=p[7]

	f=np.zeros(len(x))
	f[x<break1]=norm*x[x<break1]**(-pow1)
	f[(x>=break1)&(x<break2)]=norm*break1**(pow2-pow1)*x[(x>=break1)&(x<break2)]**(-pow2)
	f[(x>=break2)&(x<break3)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)* \
		x[(x>=break2)&(x<break3)]**(-pow3)
	f[x>=break3]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*break3**(pow4-pow3)* \
		x[x>=break3]**(-pow4)

	return f


def bkn4pow(x,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]
	break3=p[6]
	pow4=p[7]
	break4=p[8]
	pow5=p[9]

	f=np.zeros(len(x))
	f[x<break1]=norm*x[x<break1]**(-pow1)
	f[(x>=break1)&(x<break2)]=norm*break1**(pow2-pow1)*x[(x>=break1)&(x<break2)]**(-pow2)
	f[(x>=break2)&(x<break3)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)* \
		x[(x>=break2)&(x<break3)]**(-pow3)
	f[(x>=break3)&(x<break4)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*break3**(pow4-pow3)* \
		x[(x>=break3)&(x<break4)]**(-pow4)
	f[x>=break4]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*break3**(pow4-pow3)*break4**(pow5-pow4)* \
		x[x>=break4]**(-pow5)

	return f

def gauss(x,*p):

	norm=p[0]
	center=p[1]
	width=p[2]

	f=norm*np.exp(-(x-center)**2/(2*width**2))

	return f

def gauss1_pow(x,*p):

	f=gauss(x,*p[2:5])+pow(x,*p[0:2])

	return f

def gauss2_pow(x,*p):

	f=gauss(x,*p[2:5])+gauss(x,*p[5:8])+pow(x,*p[0:2])

	return f

def gauss3_pow(x,*p):

	f=gauss(x,*p[2:5])+gauss(x,*p[5:8])+gauss(x,*p[8:11])+pow(x,*p[0:2])

	return f

def gauss4_pow(x,*p):

	f=gauss(x,*p[2:5])+gauss(x,*p[5:8])+gauss(x,*p[8:11])+gauss(x,*p[11:14])+pow(x,*p[0:2])

	return f

def gauss5_pow(x,*p):

	f=gauss(x,*p[2:5])+gauss(x,*p[5:8])+gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])+pow(x,*p[0:2])

	return f

def gauss6_pow(x,*p):

	f=gauss(x,*p[2:5])+gauss(x,*p[5:8])+gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])\
		+gauss(x,*p[17:20])+pow(x,*p[0:2])

	return f

def gauss1_bknpow(x,*p):

	f=gauss(x,*p[4:7])+bknpow(x,*p[0:4])

	return f

def gauss2_bknpow(x,*p):

	f=gauss(x,*p[4:7])+gauss(x,*p[7:10])+bknpow(x,*p[0:4])

	return f

def gauss3_bknpow(x,*p):

	f=gauss(x,*p[4:7])+gauss(x,*p[7:10])+gauss(x,*p[10:13])+bknpow(x,*p[0:4])

	return f

def gauss4_bknpow(x,*p):

	f=gauss(x,*p[4:7])+gauss(x,*p[7:10])+gauss(x,*p[10:13])+gauss(x,*p[13:16])+bknpow(x,*p[0:4])

	return f

def gauss5_bknpow(x,*p):

	f=gauss(x,*p[4:7])+gauss(x,*p[7:10])+gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])\
		+bknpow(x,*p[0:4])

	return f

def gauss6_bknpow(x,*p):

	f=gauss(x,*p[4:7])+gauss(x,*p[7:10])+gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])\
		+gauss(x,*p[19:22])+bknpow(x,*p[0:4])

	return f

def gauss1_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+bkn2pow(x,*p[0:6])

	return f

def gauss2_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+gauss(x,*p[9:12])+bkn2pow(x,*p[0:6])

	return f

def gauss3_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+gauss(x,*p[9:12])+gauss(x,*p[12:15])+bkn2pow(x,*p[0:6])

	return f

def gauss4_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+gauss(x,*p[9:12])+gauss(x,*p[12:15])+gauss(x,*p[15:18])+bkn2pow(x,*p[0:6])

	return f

def gauss5_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+gauss(x,*p[9:12])+gauss(x,*p[12:15])+gauss(x,*p[15:18])+gauss(x,*p[18:21])\
		+bkn2pow(x,*p[0:6])

	return f

def gauss6_bkn2pow(x,*p):

	f=gauss(x,*p[6:9])+gauss(x,*p[9:12])+gauss(x,*p[12:15])+gauss(x,*p[15:18])+gauss(x,*p[18:21])\
		+gauss(x,*p[21:24])+bkn2pow(x,*p[0:6])

	return f

def gauss1_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+bkn3pow(x,*p[0:8])

	return f

def gauss2_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+gauss(x,*p[11:14])+bkn3pow(x,*p[0:8])

	return f

def gauss3_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])+bkn3pow(x,*p[0:8])

	return f

def gauss4_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])+gauss(x,*p[17:20])+bkn3pow(x,*p[0:8])

	return f

def gauss5_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])+gauss(x,*p[17:20])+gauss(x,*p[20:23])\
		+bkn3pow(x,*p[0:8])

	return f

def gauss6_bkn3pow(x,*p):

	f=gauss(x,*p[8:11])+gauss(x,*p[11:14])+gauss(x,*p[14:17])+gauss(x,*p[17:20])+gauss(x,*p[20:23])\
		+gauss(x,*p[23:27])+bkn3pow(x,*p[0:8])

	return f

def gauss1_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+bkn4pow(x,*p[0:10])

	return f

def gauss2_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+gauss(x,*p[13:16])+bkn4pow(x,*p[0:10])

	return f

def gauss3_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])+bkn4pow(x,*p[0:10])

	return f

def gauss4_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])+gauss(x,*p[19:22])+bkn4pow(x,*p[0:10])

	return f

def gauss5_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])+gauss(x,*p[19:22])+gauss(x,*p[22:25])\
		+bkn4pow(x,*p[0:10])

	return f

def gauss6_bkn4pow(x,*p):

	f=gauss(x,*p[10:13])+gauss(x,*p[13:16])+gauss(x,*p[16:19])+gauss(x,*p[19:22])+gauss(x,*p[22:25])\
		+gauss(x,*p[25:28])+bkn4pow(x,*p[0:10])

	return f

def Norris(x, *p):
	
	#p = [100, 250, 90, 100]
	
	#pulse amplitude = A
	A = p[0]
	#pulse start time = t0
	ts = p[1]
	#pulse rise = t1
	t1 = p[2]
	#pulse decay = t2
	t2 = p[3]
	
	L = np.exp(2*(t1/t2)**0.5)
	
	f = A*L*np.exp(-t1/(x-ts)-(x-ts)/t2)
	if type(x)!=float:
		f[x<=ts]=0
	elif x<=ts:
		f=0
#	w=np.where(x<=ts)[0]
#	f[w]=0.
	
	return f

def Norris1_pow(x,*p):

	f = Norris(x,*p[2:6])+pow(x,*p[0:2])
	return f

def Norris2_pow(x,*p):

	f=Norris(x,*p[2:6])+Norris(x,*p[6:10])+pow(x,*p[0:2])

	return f

def Norris3_pow(x,*p):

	f=Norris(x,*p[2:6])+Norris(x,*p[6:10])+Norris(x,*p[10:14])+pow(x,*p[0:2])

	return f

def Norris4_pow(x,*p):

	f=Norris(x,*p[2:6])+Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+pow(x,*p[0:2])

	return f

def Norris5_pow(x,*p):

	f=Norris(x,*p[2:6])+Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+pow(x,*p[0:2])

	return f

def Norris6_pow(x,*p):

	f=Norris(x,*p[2:6])+Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])\
		+Norris(x,*p[22:26])+pow(x,*p[0:2])

	return f

def Norris1_bknpow(x,*p):

	f=Norris(x,*p[4:8])+bknpow(x,*p[0:4])

	return f

def Norris2_bknpow(x,*p):

	f=Norris(x,*p[4:8])+Norris(x,*p[8:12])+bknpow(x,*p[0:4])

	return f

def Norris3_bknpow(x,*p):

	f=Norris(x,*p[4:8])+Norris(x,*p[8:12])+Norris(x,*p[12:16])+bknpow(x,*p[0:4])

	return f

def Norris4_bknpow(x,*p):

	f=Norris(x,*p[4:8])+Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+bknpow(x,*p[0:4])

	return f

def Norris5_bknpow(x,*p):

	f=Norris(x,*p[4:8])+Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+Norris(x,*p[20:24])\
		+bknpow(x,*p[0:4])

	return f

def Norris6_bknpow(x,*p):

	f=Norris(x,*p[4:8])+Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+Norris(x,*p[20:24])\
		+Norris(x,*p[24:28])+bknpow(x,*p[0:4])

	return f

def Norris1_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+bkn2pow(x,*p[0:6])

	return f

def Norris2_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+Norris(x,*p[10:14])+bkn2pow(x,*p[0:6])

	return f

def Norris3_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+bkn2pow(x,*p[0:6])

	return f

def Norris4_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+bkn2pow(x,*p[0:6])

	return f

def Norris5_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+Norris(x,*p[22:26])\
		+bkn2pow(x,*p[0:6])

	return f

def Norris6_bkn2pow(x,*p):

	f=Norris(x,*p[6:10])+Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+Norris(x,*p[22:26])\
		+Norris(x,*p[26:30])+bkn2pow(x,*p[0:6])

	return f

def Norris1_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+bkn3pow(x,*p[0:8])

	return f

def Norris2_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+Norris(x,*p[12:16])+bkn3pow(x,*p[0:8])

	return f

def Norris3_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+bkn3pow(x,*p[0:8])

	return f

def Norris4_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+Norris(x,*p[20:24])+bkn3pow(x,*p[0:8])

	return f

def Norris5_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+Norris(x,*p[20:24])+Norris(x,*p[24:28])\
		+bkn3pow(x,*p[0:8])

	return f

def Norris6_bkn3pow(x,*p):

	f=Norris(x,*p[8:12])+Norris(x,*p[12:16])+Norris(x,*p[16:20])+Norris(x,*p[20:24])+Norris(x,*p[24:28])\
		+Norris(x,*p[28:32])+bkn3pow(x,*p[0:8])

	return f

def Norris1_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+bkn4pow(x,*p[0:10])

	return f

def Norris2_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+Norris(x,*p[14:18])+bkn4pow(x,*p[0:10])

	return f

def Norris3_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+bkn4pow(x,*p[0:10])

	return f

def Norris4_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+Norris(x,*p[22:26])+bkn4pow(x,*p[0:10])

	return f

def Norris5_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+Norris(x,*p[22:26])+Norris(x,*p[26:30])\
		+bkn4pow(x,*p[0:10])

	return f

def Norris6_bkn4pow(x,*p):

	f=Norris(x,*p[10:14])+Norris(x,*p[14:18])+Norris(x,*p[18:22])+Norris(x,*p[22:26])+Norris(x,*p[26:30])\
		+Norris(x,*p[30:34])+bkn4pow(x,*p[0:10])

	return f


############ INTEGRAL VERSIONS

def intpow(xx,*p):

	norm=p[0]
	pow1=p[1]

	f=norm/(1.-pow1)*(xx[1,:]**(1.-pow1)-xx[0,:]**(1.-pow1))
	f=f/(xx[1,:]-xx[0,:])

	return f

def intbknpow(xx,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]

	f=np.zeros(len(xx[0]))
	m=logmean(xx)

	f[m<break1]=norm/(1.-pow1)*(xx[1,m<break1]**(1.-pow1)-xx[0,m<break1]**(1.-pow1))
	f[m>=break1]=norm*break1**(pow2-pow1)/(1.-pow2)* \
		(xx[1,m>=break1]**(1.-pow2)-xx[0,m>=break1]**(1.-pow2))
	f=f/(xx[1,:]-xx[0,:])

	return f

def intbkn2pow(xx,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]

	f=np.zeros(len(xx[0]))
	m=logmean(xx)

	f[m<break1]=norm/(1.-pow1)*(xx[1,m<break1]**(1.-pow1)-xx[0,m<break1]**(1.-pow1))
	f[(m>=break1)&(m<break2)]=norm*break1**(pow2-pow1)/(1.-pow2)* \
		(xx[1,(m>=break1)&(m<break2)]**(1.-pow2)-xx[0,(m>=break1)&(m<break2)]**(1.-pow2))
	f[m>break2]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)/(1.-pow3)* \
		(xx[1,m>break2]**(1-pow3)-xx[0,m>break2]**(1.-pow3))
	f=f/(xx[1,:]-xx[0,:])

	return f

def intbkn3pow(xx,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]
	break3=p[6]
	pow4=p[7]

	f=np.zeros(len(xx[0]))
	m=logmean(xx)

	f[m<break1]=norm/(1.-pow1)*(xx[1,m<break1]**(1.-pow1)-xx[0,m<break1]**(1.-pow1))
	f[(m>=break1)&(m<break2)]=norm*break1**(pow2-pow1)/(1.-pow2)* \
		(xx[1,(m>=break1)&(m<break2)]**(1.-pow2)-xx[0,(m>=break1)&(m<break2)]**(1.-pow2))
	f[(m>=break2)&(m<break3)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)/(1.-pow3)* \
		(xx[1,(m>=break2)&(m<break3)]**(1-pow3)-xx[0,(m>=break2)&(m<break3)]**(1.-pow3))
	f[m>=break3]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*break3**(pow4-pow3)/(1.-pow4)* \
		(xx[1,m>=break3]**(1-pow4)-xx[0,m>=break3]**(1.-pow4))
	f=f/(xx[1,:]-xx[0,:])

	return f
	
def intbkn4pow(xx,*p):

	norm=p[0]
	pow1=p[1]
	break1=p[2]
	pow2=p[3]
	break2=p[4]
	pow3=p[5]
	break3=p[6]
	pow4=p[7]
	break4=p[8]
	pow5=p[9]

	f=np.zeros(len(xx[0]))
	m=logmean(xx)

	f[m<break1]=norm/(1.-pow1)*(xx[1,m<break1]**(1.-pow1)-xx[0,m<break1]**(1.-pow1))
	f[(m>=break1)&(m<break2)]=norm*break1**(pow2-pow1)/(1.-pow2)* \
		(xx[1,(m>=break1)&(m<break2)]**(1.-pow2)-xx[0,(m>=break1)&(m<break2)]**(1.-pow2))
	f[(m>=break2)&(m<break3)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)/(1.-pow3)* \
		(xx[1,(m>=break2)&(m<break3)]**(1-pow3)-xx[0,(m>=break2)&(m<break3)]**(1.-pow3))
	f[(m>=break3)&(m<break4)]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)* \
		break3**(pow4-pow3)/(1.-pow4)*(xx[1,(m>=break3)&(m<break4)]**(1-pow4)- \
		xx[0,(m>=break3)&(m<break4)]**(1.-pow4))
	f[m>=break4]=norm*break1**(pow2-pow1)*break2**(pow3-pow2)*break3**(pow4-pow3)* \
		break4**(pow5-pow4)/(1.-pow4)* \
		(xx[1,m>=break4]**(1-pow4)-xx[0,m>=break4]**(1.-pow4))
	f=f/(xx[1,:]-xx[0,:])

	return f

def intgauss(xx,*p):

	x0=xx[0,:]
	x1=xx[1,:]
	f=[]
	for i in range(len(x0)):
		f=np.append(f,np.sqrt(math.pi/2.)*(-p[0])*p[2]*(math.erf((p[1]-x1[i])/(np.sqrt(2)*p[2]))-math.erf((p[1]-x0[i])/(np.sqrt(2)*p[2]))))
	f=f/(x1-x0)
	
	return f

def intgauss1_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intpow(xx,*p[0:2])

	return f

def intgauss2_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intgauss(xx,*p[5:8])+intpow(xx,*p[0:2])

	return f

def intgauss3_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intgauss(xx,*p[5:8])+intgauss(xx,*p[8:11])+intpow(xx,*p[0:2])

	return f

def intgauss4_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intgauss(xx,*p[5:8])+intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intpow(xx,*p[0:2])

	return f

def intgauss5_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intgauss(xx,*p[5:8])+intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])+intpow(xx,*p[0:2])

	return f

def intgauss6_pow(xx,*p):

	f=intgauss(xx,*p[2:5])+intgauss(xx,*p[5:8])+intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])\
		+intgauss(xx,*p[17:20])+intpow(xx,*p[0:2])

	return f

def intgauss1_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intbknpow(xx,*p[0:4])

	return f

def intgauss2_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intgauss(xx,*p[7:10])+intbknpow(xx,*p[0:4])

	return f

def intgauss3_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intgauss(xx,*p[7:10])+intgauss(xx,*p[10:13])+intbknpow(xx,*p[0:4])

	return f

def intgauss4_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intgauss(xx,*p[7:10])+intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intbknpow(xx,*p[0:4])

	return f

def intgauss5_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intgauss(xx,*p[7:10])+intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])\
		+intbknpow(xx,*p[0:4])

	return f

def intgauss6_bknpow(xx,*p):

	f=intgauss(xx,*p[4:7])+intgauss(xx,*p[7:10])+intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])\
		+intgauss(xx,*p[19:22])+intbknpow(xx,*p[0:4])

	return f

def intgauss1_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intbkn2pow(xx,*p[0:6])

	return f

def intgauss2_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intgauss(xx,*p[9:12])+intbkn2pow(xx,*p[0:6])

	return f

def intgauss3_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intgauss(xx,*p[9:12])+intgauss(xx,*p[12:15])+intbkn2pow(xx,*p[0:6])

	return f

def intgauss4_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intgauss(xx,*p[9:12])+intgauss(xx,*p[12:15])+intgauss(xx,*p[15:18])+intbkn2pow(xx,*p[0:6])

	return f

def intgauss5_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intgauss(xx,*p[9:12])+intgauss(xx,*p[12:15])+intgauss(xx,*p[15:18])+intgauss(xx,*p[18:21])\
		+intbkn2pow(xx,*p[0:6])

	return f

def intgauss6_bkn2pow(xx,*p):

	f=intgauss(xx,*p[6:9])+intgauss(xx,*p[9:12])+intgauss(xx,*p[12:15])+intgauss(xx,*p[15:18])+intgauss(xx,*p[18:21])\
		+intgauss(xx,*p[21:24])+intbkn2pow(xx,*p[0:6])

	return f

def intgauss1_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intbkn3pow(xx,*p[0:8])

	return f

def intgauss2_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intbkn3pow(xx,*p[0:8])

	return f

def intgauss3_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])+intbkn3pow(xx,*p[0:8])

	return f

def intgauss4_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])+intgauss(xx,*p[17:20])+intbkn3pow(xx,*p[0:8])

	return f

def intgauss5_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])+intgauss(xx,*p[17:20])+intgauss(xx,*p[20:23])\
		+intbkn3pow(xx,*p[0:8])

	return f

def intgauss6_bkn3pow(xx,*p):

	f=intgauss(xx,*p[8:11])+intgauss(xx,*p[11:14])+intgauss(xx,*p[14:17])+intgauss(xx,*p[17:20])+intgauss(xx,*p[20:23])\
		+intgauss(xx,*p[23:26])+intbkn3pow(xx,*p[0:8])

	return f

def intgauss1_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intbkn4pow(xx,*p[0:10])

	return f

def intgauss2_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intbkn4pow(xx,*p[0:10])

	return f

def intgauss3_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])+intbkn4pow(xx,*p[0:10])

	return f

def intgauss4_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])+intgauss(xx,*p[19:22])+intbkn4pow(xx,*p[0:10])

	return f

def intgauss5_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])+intgauss(xx,*p[19:22])+intgauss(xx,*p[22:25])\
		+intbkn4pow(xx,*p[0:10])

	return f

def intgauss6_bkn4pow(xx,*p):

	f=intgauss(xx,*p[10:13])+intgauss(xx,*p[13:16])+intgauss(xx,*p[16:19])+intgauss(xx,*p[19:22])+intgauss(xx,*p[22:25])\
		+intgauss(xx,*p[25:28])+intbkn4pow(xx,*p[0:10])

	return f

def intNorris(xx,*p):

	#pulse amplitude = A
	A = p[0]
	#pulse start time = t0
	ts = p[1]
	#pulse rise = t1
	t1 = p[2]
	#pulse decay = t2
	t2 = p[3]

	f=np.zeros(len(xx[0]))
	for i in range(len(xx[0])):
		if xx[1][i]>ts:
			if xx[0][i]<ts:
				xx[0][i]=ts+0.01
			f[i]=integrate.quad(Norris,xx[0][i],xx[1][i],args=(A,ts,t1,t2))[0]


	f=f/(xx[1]-xx[0])

	return f

def intNorris1_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intpow(xx,*p[0:2])

	return f

def intNorris2_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intNorris(xx,*p[6:10])+intpow(xx,*p[0:2])

	return f

def intNorris3_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intpow(xx,*p[0:2])

	return f

def intNorris4_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intpow(xx,*p[0:2])

	return f

def intNorris5_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])\
		+intpow(xx,*p[0:2])

	return f

def intNorris6_pow(xx,*p):

	f=intNorris(xx,*p[2:6])+intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])\
		+intNorris(xx,*p[22:26])+intpow(xx,*p[0:2])

	return f

def intNorris1_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intbknpow(xx,*p[0:4])

	return f

def intNorris2_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intNorris(xx,*p[8:12])+intbknpow(xx,*p[0:4])

	return f

def intNorris3_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intbknpow(xx,*p[0:4])

	return f

def intNorris4_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intbknpow(xx,*p[0:4])

	return f

def intNorris5_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intNorris(xx,*p[20:24])\
		+intbknpow(xx,*p[0:4])

	return f

def intNorris6_bknpow(xx,*p):

	f=intNorris(xx,*p[4:8])+intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intNorris(xx,*p[20:24])\
		+intNorris(xx,*p[24:28])+intbknpow(xx,*p[0:4])

	return f

def intNorris1_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intbkn2pow(xx,*p[0:6])

	return f

def intNorris2_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intbkn2pow(xx,*p[0:6])

	return f

def intNorris3_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intbkn2pow(xx,*p[0:6])

	return f

def intNorris4_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])\
		+intbkn2pow(xx,*p[0:6])

	return f

def intNorris5_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])\
		+intNorris(xx,*p[22:26])+intbkn2pow(xx,*p[0:6])

	return f

def intNorris6_bkn2pow(xx,*p):

	f=intNorris(xx,*p[6:10])+intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])\
		+intNorris(xx,*p[22:26])+intNorris(xx,*p[26:30])+intbkn2pow(xx,*p[0:6])

	return f

def intNorris1_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intbkn3pow(xx,*p[0:8])

	return f

def intNorris2_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intbkn3pow(xx,*p[0:8])

	return f

def intNorris3_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intbkn3pow(xx,*p[0:8])

	return f

def intNorris4_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intNorris(xx,*p[20:24])\
		+intbkn3pow(xx,*p[0:8])

	return f

def intNorris5_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intNorris(xx,*p[20:24])\
		+intNorris(xx,*p[24:28])+intbkn3pow(xx,*p[0:8])

	return f

def intNorris6_bkn3pow(xx,*p):

	f=intNorris(xx,*p[8:12])+intNorris(xx,*p[12:16])+intNorris(xx,*p[16:20])+intNorris(xx,*p[20:24])\
		+intNorris(xx,*p[24:28])+intNorris(xx,*p[28:32])+intbkn3pow(xx,*p[0:8])

	return f

def intNorris1_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intbkn4pow(xx,*p[0:10])

	return f

def intNorris2_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intbkn4pow(xx,*p[0:10])

	return f

def intNorris3_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])+intbkn4pow(xx,*p[0:10])

	return f

def intNorris4_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])+intNorris(xx,*p[22:26])\
		+intbkn4pow(xx,*p[0:10])

	return f

def intNorris5_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])+intNorris(xx,*p[22:26])\
		+intNorris(xx,*p[26:30])+intbkn4pow(xx,*p[0:10])

	return f

def intNorris6_bkn4pow(xx,*p):

	f=intNorris(xx,*p[10:14])+intNorris(xx,*p[14:18])+intNorris(xx,*p[18:22])+intNorris(xx,*p[22:26])\
		+intNorris(xx,*p[26:30])+intNorris(xx,*p[30:34])+intbkn4pow(xx,*p[0:10])

	return f