#include "Taxi.h"
#include <iostream>
using namespace std;

void Taxi::setTexiDetails(int tID, string name, int rpKM, int dist) {


	taxiID = tID;
	driver = name;
	ratePerKM = rpKM;
	distanceTravelled = dist;

}

void  Taxi::displayTaxiDetails() {

	cout << "Taxi ID =" << taxiID << endl;
	cout << "Driver Name =" << driver << endl;

}

float Taxi::calculateBill() {

	return ratePerKM * distanceTravelled;
}