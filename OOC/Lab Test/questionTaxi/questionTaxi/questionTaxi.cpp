#include "Taxi.h"
#include <iostream>
using namespace std;

int main() {

	Taxi t1, t2, t3;

	t1.setTexiDetails(1234, "Ben", 150, 10);
	t2.setTexiDetails(4321, "Chris", 250, 4);
	t3.setTexiDetails(3434, "Nick", 175, 2);

	t1.displayTaxiDetails();
	cout << "Bill Amount = " << t1.calculateBill() << endl << endl;

	t2.displayTaxiDetails();
	cout << "Bill Amount = " << t2.calculateBill() << endl << endl;

	t3.displayTaxiDetails();
	cout << "Bill Amount = " << t3.calculateBill() << endl;

	return 0;



}
