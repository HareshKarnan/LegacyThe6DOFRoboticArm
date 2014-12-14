const int pingpin=7;
void setup()
{
  Serial.begin(9600);
}
void loop()
{
  
  long duration;
  int x;
  int l;
  pinMode(9,OUTPUT);
  pinMode(6,OUTPUT);
  pinMode(pingpin,OUTPUT);
  digitalWrite(pingpin, LOW);
  delayMicroseconds(2);
  digitalWrite(pingpin, HIGH);
  delayMicroseconds(5);
  digitalWrite(pingpin, LOW);
  //
  //
  pinMode(4,INPUT);
  duration=pulseIn(4,HIGH);
  x=duration/44.140625;
  l=255-x;
  if (l>100)
  {
   //Serial.println(duration);
   Serial.println(l);
   analogWrite(9,l);
   delay(100);
  }
}

