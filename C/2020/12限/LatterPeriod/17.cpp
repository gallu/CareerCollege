//  17.cpp
//  cl  /EHsc  17.cpp
#include <iostream>
#include <string>
/*
typedef struct {
    int i;
    std::string s;
} Hoge;
*/
class Hoge {
    public:
        int i;
        std::string s;
};

int main() {
    //
    Hoge h;
    h.i = 999;
    h.s = "abc";
    std::cout << h.i << " , " << h.s << std::endl;

    return 0;
}