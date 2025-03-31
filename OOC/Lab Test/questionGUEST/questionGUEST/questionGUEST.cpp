#include "guest.h"
#include<iostream>
using namespace std;

int main() {

	guest g1, g2, g3;

	g1.setGuestDetails(1212, "Jared", 4500, 4 );
	g2.setGuestDetails(1122, "Ben", 3000, 3 );
	g3.setGuestDetails(1234, "Ruby", 5750, 2);

	g1.displayGuestDetails();
	cout << "Bill Amount = " << g1.calculateGuestBill() << endl;
	
	g2.displayGuestDetails();
	cout << "Bill Amount = " << g2.calculateGuestBill() << endl;

	g3.displayGuestDetails();
	cout << "Bill Amount = " << g3.calculateGuestBill() << endl;

	return 0;
}