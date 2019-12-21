// p_30.cpp
#include <iostream>
#include <vector>

class hoge {
};
class foo : public hoge {
};
class bar : public hoge {
};

void func(hoge &h) {
}

int main() {
	std::vector<hoge *> hwk;
	hwk.push_back(new hoge());
	hwk.push_back(new foo());
	hwk.push_back(new bar());

	foo f; func(f);
	bar b; func(b);

	return 0;
}