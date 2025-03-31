#include<iostream>
#include "Student.h"

using namespace std;

int main()

{

	Student S1, S2, S3, S4;

	S1.setStudentDetails(1234,"Kamal");
	S1.setMarksOOC(85);
	S1.setMarksSPM(80);
	S1.setMarksISDM(75);

	S2.setStudentDetails(4567, "Saman");
	S2.setMarksOOC(65);
	S2.setMarksSPM(50);
	S2.setMarksISDM(45);

	S3.setStudentDetails(7891, "Nimal");
	S3.setMarksOOC(98);
	S3.setMarksSPM(75);
	S3.setMarksISDM(80);

	S4.setStudentDetails(1212, "Sunil");
	S4.setMarksOOC(35);
	S4.setMarksSPM(60);
	S4.setMarksISDM(40);

   cout << "Avarage OOC Marks :" (S1.setMarksOOC + S2.setMarksOOC + S3.setMarksOOC + S4.setMarksOOC) / 4.0 << endl;
   cout << "Avarage OOC Marks :" (S1.setMarksSPM + S2.setMarksSPM + S3.setMarksSPM + S4.setMarksSPM) / 4.0 << endl;
   cout << "Avarage OOC Marks :" (S1.setMarksISDM + S2.setMarksISDM + S3.setMarksISDM + S4.setMarksISDM) / 4.0 << endl;















}