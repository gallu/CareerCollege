//  10.cpp
//  cl  /EHsc  10.cpp
#include <iostream>
#include <string>
#include <vector>
int main() {
    //
    int ai[3][10] = {
        {1, 2, 3},
        {11, 22, 33},
        {99, 88, 77},
    };
    //
    std::vector<std::vector<int> > vi = {
        {1, 2, 3},
        {11, 22, 33},
        {99, 88, 77},
    };
    //
    for( std::vector<std::vector<int> >::const_iterator itr = vi.begin(); itr != vi.end(); itr++) {
        for( std::vector<int>::const_iterator itr2 = itr->begin(); itr2 != itr->end(); itr2++) {
            std::cout << *itr2 << ", ";
        }
        std::cout << std::endl;
    }
    //
    for(auto itr = vi.begin(); itr != vi.end(); itr++) {
        for(auto itr2 = itr->begin(); itr2 != itr->end(); itr2++) {
            std::cout << *itr2 << ", ";
        }
        std::cout << std::endl;
    }
    //
    for (const auto& itr : vi) {
        for (const auto& itr2 : itr) {
            std::cout << itr2 << ", ";
        }
        std::cout << std::endl;
    }
    //
    return 0;
}







