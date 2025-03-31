#pragma once
#include <string>

class course
{
private:
	int courseID;
	char courseName;
	int creditPoints;

public:
	void setCourseDetails(int cid ,char cname , int cpoint );
	void setCreditPoint();
	void displayCourseDetails();
};

