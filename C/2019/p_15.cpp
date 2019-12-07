// p_15.cpp
#include <iostream>
#include <string>

int main() {
	std::string s = "abcdefg";
	//
	for (std::string::const_iterator itr = s.begin(); itr != s.end(); itr++) {
		std::cout << *itr << std::endl;
	}
	//
	for (auto itr = s.begin(); itr != s.end(); itr++) {
		std::cout << *itr << std::endl;
	}

	return 0;
}
