//  32.cpp
//  cl  /EHsc  32.cpp
#include <iostream>
#include <string>

class Hoge {
public:
    void exec(const std::string &s) {
        // XXX
        //s = s + "999"; // XXX
        std::cout << s << std::endl;
    }
};

int main() {
    //
    std::string s = "abc";
    Hoge h;
    //
    h.exec(s);
    std::cout << "main: " << s << std::endl;

    return 0;
}