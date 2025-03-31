#include<iostream>
using namespace std;

#pragma once
class plan
{

private:
	int planeID;
	string piolet;
	string destination;

public:
	void setPlanDetails(int pID , string pname  , string pdest);
	void displayPlaneDetails();
	string getdestination();

};

