//  9.cpp
//  cl  /EHsc  9.cpp
#include <iostream>
#include <string>
#include <vector>

int main() {
    std::vector< std::string > vs = {"aaa", "bbb"};
    vs.push_back("ccc");
    //
    for( std::vector< std::string >::const_iterator itr = vs.begin(); itr != vs.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    //
    std::cout << std::endl;
    for(auto itr = vs.rbegin(); itr != vs.rend(); itr ++) {
        std::cout << *itr << std::endl;
    }
    std::cout << std::endl;
    // ranged for
    for (const auto& itr : vs) {
        std::cout << itr << std::endl;
    }
    //
    return 0;
}



