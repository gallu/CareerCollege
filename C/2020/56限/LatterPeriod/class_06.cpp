//  class_06.cpp
//  cl  /EHsc  class_06.cpp
#include <iostream>

class Hoge {
public:
    // constructer / destructor
    Hoge();
    ~Hoge();
};
//
Hoge::Hoge() {
    std::cout << "constructer" << std::endl;
}
Hoge::~Hoge() {
    std::cout << "destructor" << std::endl;
}

int main() {
    //
    std::cout << "aaa" << std::endl;
    Hoge h;
    std::cout << "bbb" << std::endl;

    return 0;
}