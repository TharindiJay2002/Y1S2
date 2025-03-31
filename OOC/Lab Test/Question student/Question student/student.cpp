#include "Student.h"
#include <iostream>


void Student::setStudentDetails(int sID, const char sName[]) {
	strcpy_s(studentName, sName);
	studentID = sID;

};
void Student::setMarksOOC(float mOOC) {
	marksOOC = mOOC;
};

void Student::setMarksSPM(float mSPM) {
	marksSPM = mSPM;
};
void Student::setMarksISDM(float mISDM) {
	marksISDM = mISDM;
};

float Student::getMarksOOC() {
	return marksOOC;
};
float Student::getMarksSPM() {
	return marksSPM;
};

float Student::getMarksISDM() {
	return marksISDM;
};
