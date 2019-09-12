import RPi.GPIO as GPIO
import time
import urllib2.request


GPIO.setmode (GPIO.BCM)
GPIO.setup(4,GPIO.OUT)


while True:

	htmlfile = urllib2.request.urlopen(http://192.168.10.58/php)
	htmltext = htmlfile.read ()
	print (htmltext)

	if (htmltext == b'S1ON'):
		GPIO.output(4,GPIO.HIGH)
		print ("LED ON")
		time.sleep(1)

	if (htmltext == b'S1OFF'):
		GPIO.output(4,GPIOLOW)
		print ("LED OFF")
		time.sleep(1)
