#pragma once

class Student
{
private:
	int studentID;
	char studentName[20];
	float marksOOC;
	float marksSPM;
	float marksISDM;

public:
	void setStudentDetails(int sID, const char sName[]);
	void setMarksOOC(float mOOC);
	void setMarksSPM(float mSPM);
	void setMarksISDM(float mISDM);
	float getMarksOOC();
	float getMarksSPM();
	float getMarksISDM();



};

