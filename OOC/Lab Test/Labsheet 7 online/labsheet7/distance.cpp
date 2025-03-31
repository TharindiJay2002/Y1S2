#include "distance.h"
#include<iostream>

using namespace std;

distance::Distance() {
	feet = 0;
	inches = 0;

}
distance::Distance(int ft, float in) {

	feet = ft;
	inches = in;

}
void distance::inputDistance() {

	cout << "Enter no of feets =";
	cin >> feet;
	cout << "Enter no of inches = ";
	cin >> inches;

}

void distance::printDistance() {
	cout << "feet :" << feet << " and inches = " << inches << endl;

}

distance::~Distance() {
	cout<<"Distance Delete"
}


