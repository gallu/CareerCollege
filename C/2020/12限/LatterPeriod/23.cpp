//  23.cpp
//  cl  /EHsc  23.cpp
#include <iostream>

class Hoge {
public:
    // constructer / destructor
    Hoge(int i);
    ~Hoge();
    //
    void p();

private:
    int i;
};
//
Hoge::Hoge(int v) : i(v) {
    //this->i = v;
    std::cout << "Hoge constructer" << std::endl;
}
Hoge::~Hoge() {
    std::cout << "Hoge destructor" << std::endl;
}
//
void Hoge::p() {
    std::cout << this->i << std::endl;
}

int main() {
    //
    Hoge h(10);
    h.p();
    //
    Hoge h2(20);
    h2.p();

    return  0;
}