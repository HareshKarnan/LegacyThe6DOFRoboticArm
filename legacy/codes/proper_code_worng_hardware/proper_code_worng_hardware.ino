#include "dcmotor.h"
 
DCMotor motor1(9,12,6);
 
int potPin = A0;
 
double orderAngle;
 
void setup()
{
Serial.begin(115200);
 
pinMode(9,OUTPUT);
 
pinMode(12,OUTPUT);
 
motor1.SetTurnSpeed(175);
 
}
 
void loop()
{
if (Serial.available())
{
orderAngle = Serial.parseFloat();
 
Serial.print("Order Recieved:");
 
Serial.println(orderAngle);
 
ObeyServoOrder(orderAngle);
}
 
PrintServoPosition(orderAngle);
 
}
 
void ObeyServoOrder(double orderAngle)
{
double potRest = (double)analogRead(potPin)/1023 * 47; //I used a 47K potentiometer
 
double currAngle = map(potRest,0,47,0,270); //explained below....
 
//On my pot, resistance values of 0.64K to 38K correspond
//to motor shaft angles of 0 to 180 degrees
 
//make sure the ordered angle is within limits
 
orderAngle = constrain(orderAngle,0,270);
 
while (abs(orderAngle - currAngle) > 2) //there is a posn error. my error tolerance = 5 degrees
{
potRest = (double)analogRead(potPin)/1023 * 47;
 
currAngle = map(potRest,0,47,0,270);
 
if (orderAngle > currAngle)
{
//turn right
Serial.print("Current:");
Serial.print(currAngle);
Serial.print(",Order:");
Serial.print(orderAngle);
Serial.println(",Turning Right");
motor1.SetTurnDirection(right);
motor1.Turn();
 
} 
else
{
//turn left
Serial.print("Current:");
Serial.print(currAngle);
Serial.print(",Order:");
Serial.print(orderAngle);
Serial.println(",Turning Left");
motor1.SetTurnDirection(left);
motor1.Turn();
}
 
}
 
digitalWrite(9,LOW);
digitalWrite(12,LOW);
}
 
void PrintServoPosition(double orderAngle)
{
double potRest = (double)analogRead(potPin)/1023 * 47;
 
double currAngle = map(potRest,0,47,0,270);
 
Serial.print("Ordered Angle:");
Serial.print(orderAngle);
Serial.print(" ,Position:");
Serial.println(currAngle);
 
delay(50);
}
