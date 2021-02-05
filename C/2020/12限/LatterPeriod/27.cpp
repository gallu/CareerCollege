//  27.cpp
//  cl  /EHsc  27.cpp
#include <iostream>

class Hoge {
public:
    virtual void p();
};
class Foo : public Hoge {
public:
    void p();
    void p(int i);
};
//
void Hoge::p() {
    std::cout << "Hoge::p" << std::endl;
}
void Foo::p() {
    std::cout << "Foo::p" << std::endl;
}
void Foo::p(int i) {
    std::cout << "Foo::p:" << i << std::endl;
}
//
int main() {
    //
    Hoge h;
    Foo f;
    h.p();
    f.p();
    f.p(10);

    return 0;
}