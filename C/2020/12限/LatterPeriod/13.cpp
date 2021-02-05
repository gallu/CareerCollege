// 13.cpp
// cl  /EHsc  13.cpp
#include <iostream>
#include <list>

int main() {
    //
    std::list<int> data = {1, 2, 3};
    //
    for(auto itr = data.begin(); itr != data.end(); itr ++) {
        std::cout << *itr << std::endl;
    }

    //
    return 0;
}
