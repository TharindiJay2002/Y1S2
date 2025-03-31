#include<iostream>
using namespace std;

#pragma once
class Doctor
{
private:
	int doctorID;
	string doctorName;
	string speciallization;
	string hospital;

public:
	void setDoctorDetails(int dID , string dName , string dSpec , string dHospital);
	void displayDoctorDetails();
	void sethospital();
	string getSpecialization();

};

