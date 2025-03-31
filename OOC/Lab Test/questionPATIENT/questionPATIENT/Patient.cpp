#include "Patient.h"
#include <iostream>

using namespace std;
 
void Patient :: setPatientDetails(int pID, string pName){

	appointmentID = pID;
	patientName = pName;

}

void Patient ::setdoctorCharge(float dCharge) {

	doctorCharge = dCharge;

}

void Patient::sethospitalChage(float hCharge) {

	hospitalCharge = hCharge;

}

void Patient::displayPatientDtails() {

	cout << "Appoinment ID = " << appointmentID << endl;
	cout << "Patient Name = " << patientName << endl;

}

float Patient::calculateTotalPayment(){
	
	return doctorCharge + hospitalCharge;

}
