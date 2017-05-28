#!/usr/bin/env python
import urllib3
import json

def finduniversities(lat,long):
	httppool = urllib3.PoolManager()
	my_ip = httppool.request('GET' , "http://ip.42.pl/raw").data

	jsonout = httppool.request('GET', "http://ip-api.com/json/%s" % (my_ip)).data

	schools = httppool.request('GET', 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=%s'
				  ',%s&radius=16900&types=university&key=AIzaSyDseZdkdfpWCVDBtMPojxRPoi-T9ZWwEwA' % (lat,long)).data

	school2 = json.loads(schools)
	schoolresult = school2['results']

	generator = (item['name'] for item in schoolresult)
	#item['name'] is taking all the names in dictonaries under 'results' in the JSON tree
	nameslist = []

	for x in generator:
		nameslist.append(x)
	return nameslist
