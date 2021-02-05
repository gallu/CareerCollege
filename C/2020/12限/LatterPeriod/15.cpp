//  15.cpp
//  cl  /EHsc  15.cpp
#include <iostream>
#include <string>

int main() {
    std::string s = "abc";
    //
    for(int i = 0; i < s.length(); i ++) {
        std::cout << s[i] << std::endl;
    }
    std::cout << std::endl;

    //
    for(std::string::const_iterator itr = s.begin(); itr != s.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    for(auto itr = s.begin(); itr != s.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    for (const auto& itr : s) {
        std::cout << itr << std::endl;
    }

    //
    return 0;
}
