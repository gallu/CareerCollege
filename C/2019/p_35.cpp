// p_35.cpp
// cl  /EHsc  p_35.cpp
#include <iostream>

class hoge {
public:
	virtual void test(void) = 0;
};
//
class foo : public hoge {
public:
	void test(void);
};
class bar : public hoge {
public:
	void test(void);
};
//
void foo::test(void) {
	std::cout << "foo::test" << std::endl;
}
void bar::test(void) {
std::cout << "bar::test" << std::endl;
}

//
int main() {
	//
	foo f;
	bar b;
	f.test();
	b.test();

	//
	return 0;
}