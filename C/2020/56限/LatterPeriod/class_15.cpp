//  class_15.cpp
//  cl  /EHsc  class_15.cpp
#include <iostream>
#include <string>

class Hoge {
public:
/*
    void exec(const std::string &s) {
        //s = s + "123";
        std::string ss = "abc";
        s = ss;
    }
*/
    void exec(const std::string* const s) {
        //s = s + "123";
        std::string ss = "abc";
        s = &ss;
    }
};

int main() {
    //
    const int i = 999;
    //i += 10;

    const std::string *s = new std::string("abc");
    //*s = *s + "789";
    s = new std::string("789");

    const std::string* const s2 = new std::string("abc");
    //*s2 = *s2 + "789";
    //s2 = new std::string("789");
    
    std::string s3 = "abc";
    Hoge h;
    h.exec(&s3);

    return 0;
}
