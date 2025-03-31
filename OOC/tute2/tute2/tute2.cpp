// tute2.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
using namespace std;
//define a structure called box
struct Box {
	int Height;
	int Width;
	int Length;

};
int volume(Box box) 
{
	return box.Height, box.Width, box.Length;
}
int volume(int height, int width, int length);

int main() {

	// 2. Create a variable called box1 of the Box structure type
	// int box1Height, box1Width, box1Length;
	// 3. Create a variable called box2 of the Box structure type

	// int box2Height, box2Width, box2Length;
	int totalVolume,totalsurface;

	Box box1, box2;
	// 4. Input the height, width, lenght of box1 and box2
	cout << "Enter Box 1 Height : ";
	cin >> box1.Height;
	cout << "Enter Box 1 Width : ";
	cin >> box1 .Width ;
	cout << "Enter Box 1 Length : ";
	cin >> box1 .Length ;

	cout << "Enter Box 2 Height : ";
	cin >> box2 .Height ;
	cout << "Enter Box 2 Width : ";
	cin >> box2. Width ;
	cout << "Enter Box 2 Length : ";
	cin >> box2. Length ;

	// 5. Replace the coding below to pass the Box type structure
	totalVolume = volume(box1)+ volume(box2);


	cout << "Volume of Box is " << totalVolume << endl;

	return 0;
}
// Implement the functions here
// Implement the Volume() function here


// Run program: Ctrl + F5 or Debug > Start Without Debugging menu
// Debug program: F5 or Debug > Start Debugging menu

// Tips for Getting Started: 
//   1. Use the Solution Explorer window to add/manage files
//   2. Use the Team Explorer window to connect to source control
//   3. Use the Output window to see build output and other messages
//   4. Use the Error List window to view errors
//   5. Go to Project > Add New Item to create new code files, or Project > Add Existing Item to add existing code files to the project
//   6. In the future, to open this project again, go to File > Open > Project and select the .sln file
