//  25.cpp
//  cl  /EHsc  25.cpp
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
    std::cout << "p" << std::endl;
}
//
void Foo::q() {
    std::cout << "Foo::q" << std::endl;
}
//
int main() {
    //
    Hoge h;
    h.p();
    //
    Foo f;
    f.p();
    f.q();
    
    return 0;
}
