//  class_03.cpp
//  cl  /EHsc  class_03.cpp
#include <iostream>

class Hoge {
public:
    void test(int i);
};

void Hoge::test(int i) {
    std::cout << i << std::endl;
}

int main() {
    //
    Hoge h;
    h.test(999);

    return 0;
}
