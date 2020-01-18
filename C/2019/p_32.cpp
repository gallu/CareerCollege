// p_32.cpp
// cl  /EHsc  p_32.cpp
#include <iostream>

class hoge {
public:
	hoge();
	int get_i();
private:
	int i;
};
//
hoge::hoge() {
	this->i = 100;
}
int hoge::get_i() {
	return this->i;
}

int main() {
	//
	hoge h;
	std::cout << h.get_i() << std::endl;
	return 0;
}