#include "guest.h"
#include<iostream>
using namespace std;

void guest::setGuestDetails(int gID, string gName, int rate, int days) {

	guestID=gID;
	guestName=gName;
	ratePerDay=rate;
	numberOfDays=days;

}

void guest::displayGuestDetails() {

	cout << "Guest ID = " << guestID << endl;
	cout << "Guest Name =" << guestName << endl;
	cout << endl;


}

int guest::calculateGuestBill() {

	return ratePerDay * numberOfDays;

}