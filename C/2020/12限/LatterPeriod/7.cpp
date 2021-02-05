//  7.cpp
//  cl  /EHsc  7.cpp
#include <iostream>
#include <vector>

int main() {
    //
    int ai[] = {1, 2, 3};
    for(int i = 0; i < 3; i ++) {
        std::cout << ai[i] << std::endl;
    }

    //
    std::vector<int> vi = {11, 22, 33};
    for(int i = 0; i < 3; i ++) {
        std::cout << vi[i] << std::endl;
    }

    //
    return 0;
}





