// p_09.cpp
#include <iostream>
#include <vector>

int main() {
	//
	std::vector<int> v = { 1,2,3,4,5 };
	//
	v.push_back(999);
	std::cout << "size: " << v.size() << std::endl;
	//
	for (int i = 0; i < v.size(); i++) {
		std::cout << i << ":" << v[i] << std::endl;
	}

	return 0;
}

