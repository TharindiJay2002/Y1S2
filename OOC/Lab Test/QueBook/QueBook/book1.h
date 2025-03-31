#pragma once
class book1
{
private:
	int BookID;
	char BookName[60];
	char author[70];

public:
	void setbookdetails(const char bname[] , const char bauthor[]);
	void setbookId(int bID);
	void displaybookdetails();
};

