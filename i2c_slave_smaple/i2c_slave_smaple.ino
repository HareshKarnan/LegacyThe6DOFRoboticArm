// Wire Slave Receiver
// by Nicholas Zambetti <http://www.zambetti.com>

// Demonstrates use of the Wire library
// Receives data as an I2C/TWI slave device
// Refer to the "Wire Master Writer" example for use with this

// Created 29 March 2006

// This example code is in the public domain.


#include <Wire.h>

void setup()
{
  Wire.begin(3);                // join i2c bus with address #4
  Wire.onReceive(receiveEvent); // register event
 pinMode(13,OUTPUT);
  Serial.begin(9600);           // start serial for output
}

void loop()
{
  delay(100);
}

// function that executes whenever data is received from master
// this function is registered as an event, see setup()
void receiveEvent(int howMany)
{
  if( Wire.available()>0) // loop through all but the last
  
  {
    int x = Wire.read();    // receive byte as an integer
                            // print the integer
if(x==40)

{
  digitalWrite(13,HIGH);
}
else
digitalWrite(13,LOW);

}



}
