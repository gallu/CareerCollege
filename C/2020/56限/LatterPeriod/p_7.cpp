//  p_7.cpp
//  cl  /EHsc  p_7.cpp
#include <iostream>
#include <string>
#include <vector>

int main() {
    //
    char ac[2][10] = {
        "abc",
        "xyz",
    };
    for(int i = 0; i < 2; i++) {
        std::cout << ac[i] << std::endl;
    }
    //
    std::string s[] = {
        "abc",
        "xyz",
    };
    for(int i = 0; i < 2; i++) {
        std::cout << s[i] << std::endl;
    }
    //
    std::vector< std::string > vs = {
        "abc",
        "xyz",
    };
    for(int i = 0; i < 2; i++) {
        std::cout << vs[i] << std::endl;
    }

    return 0;
}