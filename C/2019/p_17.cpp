// p_17.cpp
// cl  /EHsc  p_17.cpp
#include <iostream>

class hoge {
public:
	int func(void);
};
//
int hoge::func(void) {
	return 100;
}

int main() {
	//
	hoge h;
	//
	std::cout << "func is " << h.func() << std::endl;

	return 0;
}
