//  5.cpp
//  cl  /EHsc  5.cpp
#include <iostream>
#include <string>

int main() {

    char *s = "abc";
    std::cout << s << std::endl;

    char as[] = "xyz";
    std::cout << as << std::endl;

    std::string st = "123";
    std::cout << st << std::endl;

    return 0;
}
