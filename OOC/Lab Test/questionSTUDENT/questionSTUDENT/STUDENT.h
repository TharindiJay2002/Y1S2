#include <iostream>
using namespace std;

class STUDENT {

private:
	int studentID;
	string studentName;
	int marksOOC;
	int marksSPM;
	int marksISDM;

public:
	void setStudentDetails(int sID , string sName , int OOC , int SPM , int ISDM );
	int getStudentID();
	int getMarksOOC();
	int getMarksISDM();
	int getMarksSPM();
	string getstudentName();


};