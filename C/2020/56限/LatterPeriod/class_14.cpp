//  class_14.cpp
//  cl  /EHsc  class_14.cpp
#include <iostream>
#include <string>

class Hoge {
public:
    //void exec(std::string s) {
    //void exec(std::string *s) {
    void exec(const std::string &s) {
        // XXX
        std::cout << s << std::endl;
        std::cout << s.size() << std::endl;
        std::cout << "exec: " << &s << std::endl;
        //
        //s = s + "789";
    }
};

int main() {
    //
    std::string s = "abc";
    Hoge h;
    std::cout << "main: " << &s << std::endl;
    h.exec(s);
    std::cout << "main: " << s << std::endl;

    return 0;
}
