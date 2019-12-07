// p_08.cpp
#include <iostream>
#include <vector>

int main() {
	int iwk[] = { 1,2,3,4,5 };
	for (int i = 0; i < 5; i++) {
		std::cout << i << ":" << iwk[i] << std::endl;
	}
	//
	std::vector<int> v = { 1,2,3,4,5 };
	for (int i = 0; i < 5; i++) {
		std::cout << i << ":" << v[i] << std::endl;
	}

	return 0;
}

