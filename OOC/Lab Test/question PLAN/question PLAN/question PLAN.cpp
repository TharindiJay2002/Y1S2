#include<iostream>
#include"plan.h"
using namespace std;

int main() {

	plan p1, p2, p3, p4;

	p1.setPlanDetails(1, "John", "USA");
	p2.setPlanDetails(2, "George", "UK");
	p3.setPlanDetails(3, "Henry", "USA");
	p4.setPlanDetails(4, "Ronald", "USE");

	p1.getdestination();
	p2.getdestination();
	p3.getdestination();
	p4.getdestination();

	cout << endl;

	p1.displayPlaneDetails();
	p2.displayPlaneDetails();
	p3.displayPlaneDetails();
	p4.displayPlaneDetails();

	return 0;



}