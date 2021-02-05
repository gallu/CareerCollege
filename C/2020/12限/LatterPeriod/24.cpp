//  24.cpp
//  cl  /EHsc  24.cpp
#include <iostream>

class Hoge {
public:
    void p() {
        std::cout << "p" << std::endl;
    }
    void p(int i) {
        std::cout << "p(int):" << i << std::endl;
    }
    void p(double d) {
        std::cout << "p(double):" << d << std::endl;
    }
};

//
int main() {
    //
    Hoge h;
    h.p();
    h.p(10);
    h.p(10.1);
    
    return 0;
}
