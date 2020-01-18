// p_33.cpp
// cl  /EHsc  p_33.cpp
#include <iostream>

class hoge {
public:
	hoge() : i(100) {};
	int get_i();
private:
	int i;
};
//
int hoge::get_i() {
	return this->i;
}

int main() {
	//
	hoge *h = new hoge();
	std::cout << h->get_i() << std::endl;
	return 0;
}