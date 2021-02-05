//  class_11.cpp
//  cl  /EHsc  class_11.cpp
#include <iostream>
class Hoge {
public:
    void p();
    virtual void vp();
};
class Foo : public Hoge {
public:
    void p();
    void vp();
};
//
void Hoge::p() {
    std::cout << "Hoge::p" << std::endl;
}
void Hoge::vp() {
    std::cout << "Hoge::vp" << std::endl;
}
void Foo::p() {
    std::cout << "Foo::p" << std::endl;
}
void Foo::vp() {
    std::cout << "Foo::vp" << std::endl;
}

int main() {
    //
    Hoge *ph = new Hoge();
    ph->p();
    Foo *pf = new Foo();
    pf->p();
    //
    Hoge *p = new Foo();
    p->p();
    p->vp();

    delete p;
    delete ph;
    delete pf;

    return 0;
}
