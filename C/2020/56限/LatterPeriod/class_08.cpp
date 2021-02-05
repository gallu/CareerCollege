//  class_08.cpp
//  cl  /EHsc  class_08.cpp
#include <iostream>
class Hoge {
public:
    void p();
    void p(int i);
    void p(double d);
};
//
void Hoge::p() {
    std::cout << "p" << std::endl;
}
void Hoge::p(int i) {
    std::cout << "p(int):" << i << std::endl;
}
void Hoge::p(double d) {
    std::cout << "p(double):" << d << std::endl;
}
int main() {
    //
    Hoge h;
    h.p();
    h.p(10);
    h.p(3.141592);
    
    return 0;
}
