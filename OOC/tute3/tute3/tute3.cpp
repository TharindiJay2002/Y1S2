// tute3.cpp : This file contains the 'main' function. Program execution begins and ends there.
//



#include <iostream>
using namespace std;
void print(int len, int wth);
void input(int& len, int& wth);
// Do not change the main() function
int main() {
	int length = 10, width = 5;
	input(length, width);
	print(length, width);
	return 0;
}
// Do not change the print() function
void print(int len, int wth) {
	cout << "Length : " << len<< ", Width : " << wth << endl;
}
void input(int& len, int& wth) {
	
		cout << "Length : " << len << ", Width : " << wth << endl;

}
void input(int& len, int& wth)
{
	cout << "Enter legth:";
	cin >> len;
	cout << "Enter width";
	cin >> wth;
}

// Implement the Input Function here

// Run program: Ctrl + F5 or Debug > Start Without Debugging menu
// Debug program: F5 or Debug > Start Debugging menu

// Tips for Getting Started: 
//   1. Use the Solution Explorer window to add/manage files
//   2. Use the Team Explorer window to connect to source control
//   3. Use the Output window to see build output and other messages
//   4. Use the Error List window to view errors
//   5. Go to Project > Add New Item to create new code files, or Project > Add Existing Item to add existing code files to the project
//   6. In the future, to open this project again, go to File > Open > Project and select the .sln file
