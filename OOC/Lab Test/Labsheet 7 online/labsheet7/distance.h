#pragma once
class distance
{private:

	int feet;
	float inches;

public:
	Distance();
	Distance(int ft,  float in);
	void inputDistance();
	void printDistance();
	~Distance();
};

