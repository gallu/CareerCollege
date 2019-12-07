// p_10.cpp
#include <iostream>
#include <vector>

int main() {
	//
	std::vector<int> v = { 1,2,3,4,5 };
	v.push_back(999);
	//
	for (std::vector<int>::const_iterator itr = v.begin(); itr != v.end(); itr++) {
		std::cout << *itr << std::endl;
	}
	// C++11ˆÈ~
	for (auto itr = v.begin(); itr != v.end(); itr++) {
		std::cout << *itr << std::endl;
	}
	// ‚¨‚Ü‚¯
	for (auto itr = v.rbegin(); itr != v.rend(); itr++) {
		std::cout << *itr << std::endl;
	}

	return 0;
}

