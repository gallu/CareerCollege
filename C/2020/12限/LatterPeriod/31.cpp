//  31.cpp
//  cl  /EHsc  31.cpp
#include <iostream>

class Hoge {
public:
    int i;
};

class Foo {
public:
    //static void t(Hoge h);
    //static void t(Hoge *h);
    static void t(Hoge &h);
};
//
void Foo::t(Hoge &h) {
    h.i = 999;
}

int main() {
    //
    Hoge h;
    h.i = 777;
    std::cout << h.i << std::endl;
    //
    Foo::t(h);
    std::cout << h.i << std::endl;

    return 0;
}