#include "bmp180.h"
#include <unistd.h>
#include <stdio.h>

int main(int argc, char **argv){
	char *i2c_device = "/dev/i2c-2";
	int address = 0x77;
	
	void *bmp = bmp180_init(address, i2c_device);
	
	bmp180_eprom_t eprom;
	bmp180_dump_eprom(bmp, &eprom);
	
	
	bmp180_set_oss(bmp, 1);
	
	if(bmp != NULL){
		float t = bmp180_temperature(bmp);
		long p = bmp180_pressure(bmp);
		float alt = bmp180_altitude(bmp);
		printf("Content Type: text/html\n\n");
		printf("<html><body><h1>Sensor readings:</h1><h3><table>\n");
		printf("<tr><td>temperature</td><td>%f</td></tr>\n",t);
		printf("<tr><td>pressure</td><td>%lu</td></tr>\n",p);
		printf("<tr><td>altitude></td><td>%f</td></tr>\n",alt);
		printf("</table></h3></body></html>\n");
		bmp180_close(bmp);
	}
	
	return 0;
}
