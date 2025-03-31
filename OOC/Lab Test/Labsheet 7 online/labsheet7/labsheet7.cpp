#include "distance.h"
#include<iostream>

using namespace std;

int main() {

	distance obdist1;

	obdist1.printDistance();

	distance obdist2(11, 6.25);

	obdist2.printDistance();

	distance* dist1 = new distance();
	dist1->printDistance();

	distance* dist2 = new distance();
	dist2->printDistance();

	distance dist1, dist3;
	distance dist2(11,6.25)
}