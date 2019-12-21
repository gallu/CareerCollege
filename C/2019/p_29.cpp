// p_29.cpp
#include <iostream>
#include <vector>

class hoge {
};
class foo {
};

void func(hoge &h) {
}

int main() {
	std::vector<int> iwk;
	iwk.push_back(1);
	//iwk.push_back("abc"); // ‚±‚ê‚Í‘Ê–Ú

	std::vector<hoge *> hwk;
	hwk.push_back(new hoge());
	//hwk.push_back(new foo()); // ‚±‚ê‚Í‘Ê–Ú

	foo f;
	//func(f); // ‚±‚ê‚Í‘Ê–Ú

	return 0;
}