// p_19.cpp
// cl  /EHsc  p_19.cpp
#include <iostream>

class hoge {
public:
	int func(void);
	int x;
	int y;
};
//
int hoge::func(void) {
	int x = 123;
	//return x + y;
	return this->x + this->y;
}

int main() {
	//
	hoge h;
	h.x = 10;
	h.y = 999;
	//
	std::cout << "func is " << h.func() << std::endl;

	return 0;
}
