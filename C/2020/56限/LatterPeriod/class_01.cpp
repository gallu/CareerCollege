//  class_01.cpp
//  cl  /EHsc  class_01.cpp
#include <iostream>

typedef struct {
    int i;
} _S1;

class Hoge {
public:
    int i;
};

int main() {
    //
    _S1 s;
    Hoge h;
    //
    s.i = 777;
    h.i = 999;
    //
    std::cout << s.i << "\t" << h.i << std::endl;

    //
    return 0;
}
