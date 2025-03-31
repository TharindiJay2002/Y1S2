#include <iostream>
#include "STUDENT.h"
using namespace std;


void STUDENT::setStudentDetails(int sID, string sName, int OOC, int SPM, int ISDM)
{
	studentID=sID;
	studentName=sName;
	marksOOC=OOC;
	marksSPM=SPM;
	marksISDM=ISDM;
}

int STUDENT::getStudentID()
{
	return studentID;

}

int STUDENT::getMarksOOC()
{

	return marksOOC;

}

int STUDENT::getMarksSPM()
{

	return marksSPM;
}

int STUDENT::getMarksISDM()
{

	return marksISDM;
}


int STUDENT::getstudentName()
{

	return studentName;
}
