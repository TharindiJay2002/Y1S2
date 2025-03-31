#include "Doctor.h"
#include<iostream>
using namespace std;

int main() {

	Doctor d1, d2, d3;

	//creat objects

	d1.setDoctorDetails(1, "Dr. Sunil", "Neurologist", "Asiri");
	d2.setDoctorDetails(2, "Dr. Yasantha", "Oncologist", "Lanka");
	d3.setDoctorDetails(3, "Mr.Godvin", "Cardiologist", "CCC");

	//Set New hospital for doctors 

	d1.sethospital();
	d2.sethospital();
	d3.sethospital();

	cout << endl;

	//Display Doctor Details 

	d1.displayDoctorDetails();
	d2.displayDoctorDetails();
	d3.displayDoctorDetails();

	return 0;

}