#!/bin/sh

#Eingang setzen
sudo gpio mode 7 in

sudo gpio mode 0 out

#state22="$(sudo gpio read 22)"	#Relay 1	
#state23="$(sudo gpio read 23)"	#Relay 3
#state24="$(sudo gpio read 24)"	#Relay 4
#state25="$(sudo gpio read 25)"	#Relay 6
#state26="$(sudo gpio read 26)"  #Relay 2
#state27="$(sudo gpio read 27)"	#Relay 5
#state28="$(sudo gpio read 28)"	#Relay 7
#state29="$(sudo gpio read 29)"	#Relay 8

#Feststellen, ob beim Starten der Taster gedrückt ist.
taster1="$(gpio read 7)"
if [ "taster1" = "1" ]; 
	then flag="false"
	else flag="true"
fi

#**********************************************************************
#Eigentliche Abfrage, wenn der Raspi läuft
while true
do
	#Abfrage, ob Taster nich gedrückt ist
	taster1="$(gpio read 7)"
	if [ "$taster1" = "1" ] && [ "$flag" = "true" ];
		then flag="false"
	fi

	#Abfrage, ob Taster gedrückt ist -> schaltet Relais
	if [ "$taster1" = "0" ] && [ "$flag" = "false" ];
		then flag="true"

		if [ "$(gpio read 0)" = "1" ];
			then gpio write 0 0
			else gpio write 0 1
		fi
	fi
sleep 0.2
done




