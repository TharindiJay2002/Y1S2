#include "Doctor.h"
#include<iostream>
using namespace std;

void Doctor::setDoctorDetails(int dID, string dName, string dSpec, string dHospital) {
    doctorID = dID;
    doctorName = dName;
    speciallization = dSpec;
    hospital = dHospital;


}

void  Doctor::displayDoctorDetails() {
     
    cout << "DoctorID = " << doctorID << endl;
    cout << "Doctor Name = " << doctorName << endl;
    cout << "Specialization = " << speciallization << endl;
    cout << "Hospital = " << hospital << endl;

    cout << endl;

}

string Doctor::getSpecialization() {

    return speciallization;

}

void Doctor::sethospital() {

    cout << "Input new hospital of doctor" << doctorID << " : ";
    cin >> hospital;
}