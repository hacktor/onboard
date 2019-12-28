SENSOR=bmp180

all:
	gcc -Wall -c $(SENSOR).c -o $(SENSOR).o -lm
	gcc -Wall $(SENSOR).o test.c -o test.o -lm
	gcc -Wall $(SENSOR).o sensor.c -o sensor.cgi -lm
	gcc -Wall $(SENSOR).o sensors.c -o sensors -lm
	gcc -Wall $(SENSOR).o temp.c -o temp -lm
	gcc -Wall $(SENSOR).o pres.c -o pres -lm
	gcc -Wall $(SENSOR).o alti.c -o alti -lm

clean:
	rm *.o > /dev/null 2>&1 &
