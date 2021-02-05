//  28.cpp
//  cl  /EHsc  28.cpp
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
//
int main() {
    //
    Hoge h;
    Foo f;
    h.p();
    h.vp();
    f.p();
    f.vp();
    std::cout << std::endl;
    //
    Hoge *ph = new Hoge();
    Foo *pf = new Foo();;
    ph->p();
    ph->vp();
    pf->p();
    pf->vp();
    std::cout << std::endl;
    //
    Hoge *phf = new Foo();
    phf->p();
    phf->vp();

    //
    delete ph;
    delete pf;
    delete phf;
    
    return 0;
}










