// p_36.cpp
// cl  /EHsc  p_36.cpp
#include <iostream>

class Hoge {
public:
	void func(void);
	virtual void v_func(void);
};
class Foo : public Hoge {
public:
	void func(void);
	void v_func(void);
};
//
void Hoge::func() {
	std::cout << "Hoge::func" << std::endl;
}
void Hoge::v_func() {
	std::cout << "Hoge::v_func" << std::endl;
}
void Foo::func() {
	std::cout << "Foo::func" << std::endl;
}
void Foo::v_func() {
	std::cout << "Foo::v_func" << std::endl;
}
//
int main() {
	Hoge* h_obj = new Hoge();
	Hoge* hf_obj = new Foo();
	Foo* f_obj = new Foo();
	//
	std::cout << "Hoge" << std::endl;
	h_obj->func(); h_obj->v_func();

	std::cout << std::endl << "Foo in Hoge" << std::endl;
	hf_obj->func(); hf_obj->v_func();

	std::cout << std::endl << "Foo" << std::endl;
	f_obj->func(); f_obj->v_func();
}

