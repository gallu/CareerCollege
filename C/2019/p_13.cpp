// p_13.cpp
#include <iostream>
#include <map>
#include <string>

int main() {
	std::map<std::string, int> m;
	m["aa"] = 10;
	m["bb"] = 20;
	m["cc"] = 30;
	//
	std::cout << "size: " << m.size() << std::endl;
	std::cout << "aa: " << m["aa"] << std::endl;
	//
	for (std::map<std::string, int>::const_iterator itr = m.begin(); itr != m.end(); itr++) {
		std::cout << itr->first << ":" << itr->second << std::endl;
	}

	return 0;
}