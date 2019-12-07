// p_07.cpp
#include <iostream>
#include <string>

using std::string;

int main() {
	string s = "abc";
	string s2 = "abc";

	if (s == s2) {
		std::cout << "OK" << std::endl;
	}

	return 0;
}