// p_34.cpp
// cl  /EHsc  p_34.cpp
#include <iostream>

class hoge {
public:
	hoge();
	~hoge();
	//
	int get_i();
private:
	int i;
};
//
hoge::hoge() {
	this->i = 100;
}
hoge::~hoge() {
	std::cout << "fin" << std::endl;
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