#pragma once
class Patient
{
private:

	int appointmentID;
	string patientName;
	float doctorCharge;
	float  hospitalCharge;

public:

	void setPatientDetails(int pID , string pName);
	void displayPatientDtails();
	void setdoctorCharge(float dCharge);
	void sethospitalChage(float hCharge);
	void calculateTotalPayment();

};

