//  p_13.cpp
//  cl  /EHsc  p_13.cpp
#include <iostream>
#include <list>

int main() {
    //
    std::list< int > vi = { 1, 2, 3 };
    //
    for(std::list<int>::const_iterator itr = vi.begin(); itr != vi.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    //
    std::cout << std::endl;
    for(auto itr = vi.rbegin(); itr != vi.rend(); itr ++) {
        std::cout << *itr << std::endl;
    }
    std::cout << std::endl;
    // ranged for
    for (const auto& itr : vi) {
        std::cout << itr << std::endl;
    }

    //
    return 0;
}



