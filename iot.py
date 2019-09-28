import RPi.GPIO as GPIO
import time
import dht11

GPIO.setmode (GPIO.BCM)
tem= dht11.DHT11(pin=4)
GPIO.setup(17,GPIO.OUT)
GPIO.setup(27,GPIO.OUT)
def temf():
    time.sleep(2)
    result= tem.read()
    x=result.temperature
    y=int(x)
    if (y > 0):
        with open("/var/www/html/read3.txt","w")as f3:
            f3.write(str(y)+"C")

def light():
  with open("/var/www/html/buttonStatus.txt","r")as f1:
    a=f1.read()
    if (a=="S1ON"):
         GPIO.output(17,GPIO.HIGH)
    if (a=="S1OFF"):
         GPIO.output(17,GPIO.LOW)
def window():
    with open("/var/www/html/buttonStatus2.txt","r")as f2:
        b=f2.read()
        if (b=="S2ON"):
            GPIO.output(27,GPIO.HIGH)
        if (b=="S2OFF"):
            GPIO.output(27,GPIO.LOW)

while True:
    light()
    window()
    temf()
