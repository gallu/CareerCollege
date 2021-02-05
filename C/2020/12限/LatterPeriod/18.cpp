//  18.cpp
//  cl  /EHsc  18.cpp
#include <iostream>
#include <string>
/*
class Hoge {
        int i;
        std::string s;
};
*/
class Hoge {
    //private:
    //protected:
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