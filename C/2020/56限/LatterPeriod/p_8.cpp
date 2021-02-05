//  p_8.cpp
//  cl  /EHsc  p_8.cpp
#include <iostream>
#include <string>
#include <vector>

int main() {
    //
    std::vector< std::string > vs = {
        "abc",
        "xyz",
    };
    std::cout << vs.size() << std::endl;
    vs.push_back("123456");
    std::cout << vs.size() << std::endl;
    //
    for(unsigned int i = 0; i < vs.size(); i ++) {
        std::cout << vs[i] << std::endl;
    }
    //
    for(std::vector<std::string>::const_iterator itr = vs.begin(); itr != vs.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    //
    for(auto itr = vs.begin(); itr != vs.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    // ranged for
    for (const auto& itr : vs) {
        std::cout << itr << std::endl;
    }

    //
    return 0;
}







