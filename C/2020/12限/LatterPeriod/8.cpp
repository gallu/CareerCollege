//  8.cpp
//  cl  /EHsc  8.cpp
#include <iostream>
#include <vector>

int main() {
    //
    std::vector<int> vi = {11, 22, 33};
    for(int i = 0; i < 3; i ++) {
        std::cout << vi[i] << std::endl;
    }
    //
    std::cout << "size is " << vi.size() << std::endl;
    std::cout << "capacity is " << vi.capacity() << std::endl;
    for(int i = 0; i < vi.size(); i ++) {
        std::cout << vi[i] << std::endl;
    }
    //
    vi.push_back(44);
    vi.push_back(55);
    for(int i = 0; i < vi.size(); i ++) {
        std::cout << vi[i] << std::endl;
    }
    //
    for( std::vector<int>::const_iterator itr = vi.begin(); itr != vi.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    //
    for(auto itr = vi.begin(); itr != vi.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    // ranged for
    for (const auto& itr : vi) {
        std::cout << itr << std::endl;
    }

    //
    return 0;
}
