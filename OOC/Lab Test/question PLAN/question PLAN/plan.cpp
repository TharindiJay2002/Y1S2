#include<iostream>
#include"plan.h"
using namespace std;

void plan::setPlanDetails(int pID, string pname, string pdest) {

	planeID=pID;
	piolet=pdest;
	destination=pdest;

}

void plan::displayPlaneDetails() {

	cout << "Plane ID = " << planeID << endl;
	cout << "Piolet = " << piolet << endl;
	cout << "Destination =" << destination << endl;

}

void plan::getdestination() {

	cout << "Input new pilot of plane " << planeID << " : ";
	cin >> piolet;

}