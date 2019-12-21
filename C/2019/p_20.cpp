// p_20.cpp
// cl  /EHsc  p_20.cpp
#include <iostream>

class hoge {
public:
	int func(void);
	void set_x(int i);
	void set_y(int i);
private:
	int x;
	int y;
};
// ŽÀ‘•
void hoge::set_x(int i) {
	this->x = i;
}
void hoge::set_y(int i) {
	this->y = i;
}
int hoge::func(void) {
	int x = 123;
	//return x + y;
	return this->x + this->y;
}

int main() {
	//
	hoge h;
	h.set_x(10);
	h.set_y(999);
	//
	std::cout << "func is " << h.func() << std::endl;

	return 0;
}

