#include <VirtualWire.h>
void setup() {
  pinMode(13,OUTPUT);
  pinMode(3,OUTPUT);
  pinMode(4,OUTPUT);
  pinMode(5,OUTPUT);
  pinMode(6,OUTPUT);
  pinMode(7,OUTPUT);
  Serial.begin(9600);
vw_set_ptt_inverted(true); //
vw_set_tx_pin(12);
vw_setup(4000);// speed of data transfer Kbps
}

int angle;
char controller[10];


void loop(){
  if(Serial.available()>0)
  {
angle=Serial.parseInt();
itoa(angle,controller,10);
digitalWrite(3,HIGH);
vw_send((uint8_t *)controller, strlen(controller));
vw_wait_tx(); // Wait until the whole message is gone
digitalWrite(3,LOW);
digitalWrite(13,HIGH);
delay(10);
digitalWrite(13,LOW);

angle=Serial.parseInt();
itoa(angle,controller,10);
digitalWrite(4,HIGH);
vw_send((uint8_t *)controller, strlen(controller));
vw_wait_tx(); // Wait until the whole message is gone
digitalWrite(4,LOW);
digitalWrite(13,HIGH);
delay(10);
digitalWrite(13,LOW);

angle=Serial.parseInt();
itoa(angle,controller,10);
digitalWrite(5,HIGH);
vw_send((uint8_t *)controller, strlen(controller));
vw_wait_tx(); // Wait until the whole message is gone
digitalWrite(5,LOW);
digitalWrite(13,HIGH);
delay(10);
digitalWrite(13,LOW);

angle=Serial.parseInt();
itoa(angle,controller,10);
digitalWrite(6,HIGH);
vw_send((uint8_t *)controller, strlen(controller));
vw_wait_tx(); // Wait until the whole message is gone
digitalWrite(6,LOW);
digitalWrite(13,HIGH);
delay(10);
digitalWrite(13,LOW);

angle=Serial.parseInt();
itoa(angle,controller,10);
digitalWrite(7,HIGH);
vw_send((uint8_t *)controller, strlen(controller));
vw_wait_tx(); // Wait until the whole message is gone
digitalWrite(7,LOW);
digitalWrite(13,HIGH);
delay(10);
digitalWrite(13,LOW);
  }
}

