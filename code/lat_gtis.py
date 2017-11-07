#!/usr/bin/env python
"""
------------------------------------------------------------------------

Download LAT FT2 files
Find GTI overlap for LAT & XRT GRBs

------------------------------------------------------------------------
"""

import numpy as np
import glob
import urllib
import codecs

def download_ft2s(dir='/Users/jracusin/Fermi/weekly_ft2/'):

	ft2s=glob.glob(dir+'lat_1sec_spacecraft_weekly*fits')

	weekdone=[]
	for ft2 in ft2s:
		sp=ft2.split('_')
		weekdone.append(sp[5].split('w')[1])

	print('Grabbing FT2 list from ftp://legacy.gsfc.nasa.gov/fermi/data/lat/weekly/1s_spacecraft/')
#	urllib.urlretrieve('ftp://legacy.gsfc.nasa.gov/fermi/data/lat/weekly/1s_spacecraft/',dir+'ft2_list.txt')
	f=codecs.open(dir+'ft2_list.txt', 'r')
	lines=f.read()
	i=0
	weeksplit=lines.split('lat_1sec_spacecraft_weekly_w')
	week=[]
	for sp in weeksplit:
		if '_p' in sp:
			week.append(sp.split('_p')[0])

	notdone=set(week).symmetric_difference(set(weekdone))


	print('Downloading New Files:')
	for w in notdone:
		newfile='ftp://legacy.gsfc.nasa.gov/fermi/data/lat/weekly/1s_spacecraft/lat_1sec_spacecraft_weekly_w'+w+'_p203_v001.fits'
		file='lat_1sec_spacecraft_weekly_w'+w+'_p203_v001.fits'
		print(newfile)
		urllib.urlretrieve(newfile,dir+file)
		urllib.urlcleanup()