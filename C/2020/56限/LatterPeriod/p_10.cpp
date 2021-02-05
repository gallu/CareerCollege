//  p_10.cpp
//  cl  /EHsc  p_10.cpp
#include <iostream>
#include <vector>

int main() {
    //
    int ai[3][10] = {
        {1, 2, 3, },
        {11, 22, },
        {999, 888, 777, 666, 555 },
    };
    //
    std::vector<std::vector<int>> vvi = {
        {1, 2, 3, },
        {11, 22, },
        {999, 888, 777, 666, 555 },
    };
    //
    for(std::vector<std::vector<int>>::const_iterator itr = vvi.begin(); itr != vvi.end(); itr ++) {
        for(std::vector<int>::const_iterator itr2 = itr->begin(); itr2 != itr->end(); itr2 ++) {
            std::cout << *itr2 << ", ";
        }
        std::cout << std::endl;
    }
    //
    for(auto itr = vvi.begin(); itr != vvi.end(); itr ++) {
        for(auto itr2 = itr->begin(); itr2 != itr->end(); itr2 ++) {
            std::cout << *itr2 << ", ";
        }
        std::cout << std::endl;
    }
    //
    for (const auto& itr : vvi) {
        for (const auto& itr2 : itr) {
            std::cout << itr2 << ", ";
        }
        std::cout << std::endl;
    }

    //
    return 0;
}






