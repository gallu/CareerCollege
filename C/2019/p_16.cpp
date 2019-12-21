// p_16.cpp
// cl  /EHsc  p_16.cpp
#include <iostream>

class hoge {
public:
	int x;
	int y;
};

int main() {
	//
	hoge h;
	h.x = 10;
	h.y = 999;
	//
	std::cout << "x is " << h.x << ", y is " << h.y << std::endl;

	return 0;
}
