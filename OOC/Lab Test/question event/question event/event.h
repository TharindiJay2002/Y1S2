#pragma once
class event
{
private:

	int eventID;
	char eventType;
	char themeColor;
	char location;

public:

	void setEventDetails(int eid, char etyp, char tcolr,  char eloc);
	void setEventLocation();
	void displayEventDetails();
};

