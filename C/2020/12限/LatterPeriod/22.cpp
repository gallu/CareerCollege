//  22.cpp
//  cl  /EHsc  22.cpp
#include <iostream>

class Hoge {
public:
    // constructer / destructor
    Hoge();
    ~Hoge();
};
//
Hoge::Hoge() {
    std::cout << "Hoge constructer" << std::endl;
}
Hoge::~Hoge() {
    std::cout << "Hoge destructor" << std::endl;
}

int main() {
    //
    std::cout << "aaa" << std::endl;
    Hoge h;
    std::cout << "bbb" << std::endl;

    return 0;
}