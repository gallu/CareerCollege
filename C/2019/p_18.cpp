// p_18.cpp
// cl  /EHsc  p_18.cpp
#include <iostream>

class hoge {
public:
	int func(void);
	int x;
	int y;
};
//
int hoge::func(void) {
	return 100;
}

int main() {
	//
	hoge h;
	h.x = 10;
	h.y = 999;
	//
	std::cout << "x is " << h.x << ", y is " << h.y << std::endl;
	std::cout << "func is " << h.func() << std::endl;

	return 0;
}
