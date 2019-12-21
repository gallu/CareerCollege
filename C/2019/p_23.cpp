// p_23.cpp
#include <iostream>
class hoge {
public:
	void func1(void);
};
class foo : public hoge {
public:
	void func1(void);
	void func2(void);
};
//
void hoge::func1(void) {
	std::cout << "func1" << std::endl;
}
void foo::func1(void) {
	std::cout << "foo:func1" << std::endl;
}
void foo::func2(void) {
	std::cout << "func2" << std::endl;
}
int main() {
	foo f;
	f.func1();
	hoge h;
	h.func1();
	return 0;
}