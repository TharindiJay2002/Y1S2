#include <iostream>
using namespace std;

#pragma once
class Taxi
{
private:

	int taxiID;
	string driver;
	int ratePerKM;
	int distanceTravelled;

public:
	void setTexiDetails(int tID , string driver ,int rpKM , int dist);
	void displayTaxiDetails();
	float calculateBill();

};

