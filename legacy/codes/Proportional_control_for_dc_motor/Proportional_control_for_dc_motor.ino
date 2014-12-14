#include <Servo.h> 
 
Servo myservo;  // create servo object to control a servo 
 
double potcurval;    // variable to read the value from the analog pin 
 double angle=70 ;

 double curangle,kP=10,kI=0,kD=0,Last=0;
 double P=0,I=0,D=0,Drive,Error=0,Integral=0;
 void backward()
 {
   digitalWrite(12,HIGH);
   digitalWrite(9,LOW);
 }
  void forward()
 {
   digitalWrite(12,LOW);
   digitalWrite(9,HIGH);
 }
 void halt()
 {
    digitalWrite(12,LOW);
   digitalWrite(9,LOW);
 }
void setup() 
{ 
 // myservo.attach(6);  // attaches the servo on pin 9 to the servo object 

  Serial.begin(9600);
} 
 void Errorcalc()
 {
   potcurval=(double)analogRead(A0)+1;
   potcurval=(potcurval/1024)*5;
    curangle=(potcurval/5)*270;
   
                Error = curangle-angle;
 }
void loop() 
{ 
                 Errorcalc();
                if (abs(Error) < 10){ // prevent integral 'windup'
                Integral = Integral + Error; // accumulate the error integral
                }
                else {
                Integral=0; // zero it if out of bounds
                }
                P = Error*kP; // calc proportional term
                I = Integral*kI; // integral term
                D = (Last-curangle)*kD; // derivative term
                
                Drive = P + I + D; // Total drive = P+I+D
                
                //Drive = (Drive/550)*255; // scale Drive to be in the range 0-255
                
                
                if (abs(Drive)>255) {
                Drive=(Drive/abs(Drive)) * 255;
                }
                
                
                Serial.println(Drive);
                
                if (Error < 0){ // Check which direction to go.
                forward();
                
                }
                else if(Error >=0){ // depending on the sign of Error
                 backward();
                 
                }
                
                if(abs(Drive)<50 || abs(Error)<5)
                {
                  halt();
                }
                
                analogWrite (6,abs(Drive)); // send PWM command to motor board
                Last=curangle;
   /*
    Serial.println("P :");
    Serial.println(P);
    Serial.println("I :");
    Serial.println(I);
    Serial.println("D :");
    Serial.println(D);
    */

} 
