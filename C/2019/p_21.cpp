// p_21.cpp
#include <iostream>

class hoge {
public:
	int i;
};
class foo : public hoge {
public:
	int j;
};

int main() {
	foo f;
	f.i = 10;

	return 0;
}