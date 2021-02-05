//  19.cpp
//  cl  /EHsc  19.cpp
#include <iostream>
#include <string>

class Hoge {
    public:
        void test(int i);
};

void Hoge::test(int i) {
    std::cout << "Hello " << i << std::endl;
}

int main() {
    //
    Hoge h;
    h.test(10);
    
    return 0;
}