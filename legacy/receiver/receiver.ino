#include <VirtualWire.h>
void setup()
{
    vw_set_ptt_inverted(true); // Required for DR3100
    vw_set_rx_pin(12);
    vw_setup(4000);  // Bits per sec
    pinMode(13, OUTPUT);
  pinMode(3,INPUT);
    vw_rx_start();       // Start the receiver PLL running
}
int angle;
    void loop()
{
    uint8_t buf[VW_MAX_MESSAGE_LEN];
    uint8_t buflen = VW_MAX_MESSAGE_LEN;
    char var[10];

    if (vw_get_message(buf, &buflen) && digitalRead(3)==HIGH) // Non-blocking
    {
      
      
      angle=atoi((char*)buf);
      if(angle==40){   
      digitalWrite(13,1);
      delay(1000);
      }
      
      }
      else{
  digitalWrite(13,0);
    }

}
