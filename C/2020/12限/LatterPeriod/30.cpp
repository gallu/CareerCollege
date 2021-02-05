//  30.cpp
//  cl  /EHsc  30.cpp
#include <iostream>
class HogeInterface {
public:
    virtual void p() = 0;
};

class Foo {
public:
    virtual void test();
};

class Bar : public HogeInterface, public Foo {
public:
    void p();
};

//
void Foo::test() {
    std::cout << "Foo::test" << std::endl;
}
void Bar::p() {
    std::cout << "Bar::p" << std::endl;
}

//
int main() {
    //
    Bar b;
    b.test();
    b.p();
    
    return 0;
}

