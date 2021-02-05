//  p_9.cpp
//  cl  /EHsc  p_9.cpp
#include <iostream>
#include <vector>

int main() {
    //
    std::vector< int > vi = { 1, 2, 3 };
    //
    for(std::vector<int>::const_iterator itr = vi.begin(); itr != vi.end(); itr ++) {
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



