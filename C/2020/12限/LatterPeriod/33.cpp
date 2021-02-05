//  33.cpp
//  cl  /EHsc  33.cpp
#include <iostream>
#include <string>

int main() {
    //
    const char *c1 = "abc";
    //c1[0] = 'A';
    
    const int i = 999;
    //i += 10;
    
    //
    const std::string *s1 = new std::string("abc");
    //*s1 = *s1 + "xyz";
    s1 = new std::string("xyz");

    //
    std::string * const s2 = new std::string("abc");
    *s2 = *s2 + "xyz";
    //s2 = new std::string("xyz");

    //
    const std::string * const s3 = new std::string("abc");
    //*s3 = *s3 + "xyz";
    //s3 = new std::string("xyz");

    return 0;
}