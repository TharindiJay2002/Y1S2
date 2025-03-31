#include "event.h"
#include<iostream>

using namespace std;

void event::setEventDetails(int eid, char etyp, char tcolr, char eloc) {

	eventID = eid;
	eventType = etyp;
	themeColor = tcolr;
	location = eloc;

}

void event::setEventLocation() {

	cout << "input new location of event" << eventID << " :" << endl;
	cin >> location;


}


void event::displayEventDetails() {

	cout << "Event Type = " << eventType << endl;
	cout << "Theme Color = " << themeColor << endl;
	cout << "Location = " << location << endl;
}