//  class_09.cpp
//  cl  /EHsc  class_09.cpp
#include <iostream>
class Hoge {
public:
    void p();
};
class Foo : public Hoge {
public:
    void q();
};
//
void Hoge::p() {
    std::cout << "Hoge::p" << std::endl;
}
void Foo::q() {
    std::cout << "Foo::q" << std::endl;
}

int main() {
    //
    Hoge h;
    h.p();
    //
    Foo f;
    f.q();
    f.p();
    
    return 0;
}
