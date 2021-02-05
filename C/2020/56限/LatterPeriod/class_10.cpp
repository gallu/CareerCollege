//  class_10.cpp
//  cl  /EHsc  class_10.cpp
#include <iostream>
class Hoge {
public:
    void p();
};
class Foo : public Hoge {
public:
    void p();
};
//
void Hoge::p() {
    std::cout << "Hoge::p" << std::endl;
}
void Foo::p() {
    std::cout << "Foo::p" << std::endl;
    Hoge::p();
}

int main() {
    //
    Hoge h;
    h.p();
    Foo f;
    f.p();

    return 0;
}
