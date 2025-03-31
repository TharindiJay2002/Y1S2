#include <iostream>
#include "STUDENT.h"
using namespace std;

int main()
{
	STUDENT S1, S2, S3 ;

	S1.setStudentDetails(1234, "Kylie", 78, 80, 60);
	S2.setStudentDetails(4321, "James", 65, 70, 85);
	S3.setStudentDetails(6543, "Kyson", 90, 85, 80);

	int S1TM, S2TM, S3TM;
	
	S1TM = S1.getMarksISDM() + S1.getMarksOOC() + S1.getMarksSPM();
	S2TM = S2.getMarksISDM() + S2.getMarksOOC() + S2.getMarksSPM();
	S3TM = S3.getMarksISDM() + S3.getMarksOOC() + S3.getMarksSPM();


	cout << "Student ID = " << S1.getStudentID() << endl;
	cout << "StudentName = " << S1.getstudentName() << endl;
	cout << "Marks OOC = " << S1.getMarksOOC() << endl;
	cout << "Marks SPM = " << S1.getMarksSPM()<< endl;
	cout << "Marks ISDM = " << S1.getMarksISDM()<< endl;
	cout << "Total Marks = " << S1TM << endl;
	cout << "Average Mark = " << setiosflags(ios::fixed) << setprecision(2) << S1TM / 3.0 << endl << endl;

	cout << "Student ID = " << S2.getStudentID()<< endl;
	cout << "StudentName = " << S2.getstudentName() << endl;
	cout << "Marks OOC = " << S2.getMarksOOC() << endl;
	cout << "Marks SPM = " << S2.getMarksSPM() << endl;
	cout << "Marks ISDM = " << S2.getMarksISDM() << endl;
	cout << "Total Marks = " << S2TM << endl;
	cout << "Average Mark = " << setiosflags(ios::fixed) << setprecision(2) << S2TM / 3.0 << endl << endl;

	cout << "Student ID = " << S3.getStudentID() << endl;
	cout << "StudentName = " << S3.getstudentName() << endl;
	cout << "Marks OOC = " << S3.getMarksOOC() << endl;
	cout << "Marks SPM = " << S3.getMarksSPM() << endl;
	cout << "Marks ISDM = " << S3.getMarksISDM() << endl;
	cout << "Total Marks = " << S3TM << endl;
	cout << "Average Mark = " << setiosflags(ios::fixed) << setprecision(2) << S3TM / 3.0 << endl << endl;

	return 0;
}