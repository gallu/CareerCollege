// p_37.cpp
#include <iostream>
#include <string>

class Hoge {
public:
	void test(int i);
	void test(double d);
	void test(const std::string &s);
};
//
void Hoge::test(int i) {
	std::cout << "int:" << i << std::endl;
}
void Hoge::test(double d) {
	std::cout << "double:" << d << std::endl;
}
void Hoge::test(const std::string &s) {
	std::cout << "string:" << s << std::endl;
}

int main() {
	Hoge h;
	h.test(100);
	h.test(1.23);
	h.test("abc");

	return 0;
}