// p_26.cpp
#include <stdio.h>
#include <iostream>
class hoge {
public:
	void set_i(int i);
	int get_i(void);
private:
	int i;
};
//
void hoge::set_i(int i) {
	this->i = i;
}
int hoge::get_i(void) {
	return this->i;
}
// ŽQÆ‚Ì’l“n‚µ
void func(hoge *h) {
	printf("func: %p\n", h);
	h->set_i(10);
}
//
int main() {
	hoge h;
	printf("main: %p\n", &h);
	func(&h);
	std::cout << h.get_i() << std::endl;
}