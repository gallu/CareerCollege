// p_11.cpp
#include <iostream>
#include <vector>

int main() {
	std::vector<int> v = {1,2,3};
	//
	std::cout << "0: " << v[0] << std::endl;
	v[0] = 999;
	std::cout << "0: " << v[0] << std::endl;
	//
	std::cout << "size: " << v.size() << std::endl;
	std::cout << "max_size: " << v.max_size() << std::endl;
	std::cout << "capacity: " << v.capacity() << std::endl;
	//
	std::cout << "clear" << std::endl;
	v.clear();
	//
	std::cout << "size: " << v.size() << std::endl;
	std::cout << "max_size: " << v.max_size() << std::endl;
	std::cout << "capacity: " << v.capacity() << std::endl;
	//
	return 0;
}