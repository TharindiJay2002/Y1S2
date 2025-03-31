#include "course.h"
#include<iostream>

using namespace std;

void course::setCourseDetails(int cid, char cname, int cpoint) {

	courseID = cid;
	courseName = cname;
	creditPoints = cpoint;

};

void course::displayCourseDetails() {

	cout << "Course ID = " << courseID << endl;
	cout << "Course Name = " << courseName << endl;
	cout << "CreditPoint = " << creditPoints << endl;

}
void course::setCreditPoint() {

	cout << "Input new " << courseName << "credit Point :";
	cin >> creditPoints;
}