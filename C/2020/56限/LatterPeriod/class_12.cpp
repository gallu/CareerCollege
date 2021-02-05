//  class_12.cpp
//  cl  /EHsc  class_12.cpp
#include <iostream>
class Hoge {
public:
    virtual void p() = 0;
};
class Foo : public Hoge {
public:
    void p();
};
//
void Foo::p() {
    std::cout << "Foo::p" << std::endl;
}

int main() {
    //
    Foo *pf = new Foo();
    pf->p();
    //
    //Hoge *ph = new Hoge();

    delete pf;
    return 0;
}