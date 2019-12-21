// p_24.cpp
#include <iostream>
class hoge {
public:
	void func1(void);
};
class foo : public hoge {
public:
	void func2(void);
};
//
void hoge::func1(void) {
	std::cout << "func1" << std::endl;
}
void foo::func2(void) {
	std::cout << "func2" << std::endl;
}
int main() {
	foo *f = new foo();
	hoge *h = new hoge();
	f->func1();
	return 0;
}