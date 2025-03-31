#include<iostream>
using namespace std;


#pragma once
class guest
{
private:
	int guestID;
	string guestName;
	int ratePerDay;
	int numberOfDays;

public:
	void setGuestDetails(int gID , string gName ,int rate , int days );
	void displayGuestDetails();
	int calculateGuestBill();

};

