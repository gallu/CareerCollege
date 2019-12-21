// p_31.cpp
#include <iostream>

class hoge {
public:
	int i;
};
class foo {
public:
	int j;
};
class bar : public hoge, public foo {
};

int main() {
	bar b;
	b.i = 10;
	b.j = 999;
	return 0;
}