//  6.cpp
//  cl  /EHsc  6.cpp
#include <iostream>
#include <string>

int main(int argc, char *argv[]) {
    if (3 > argc) {
        std::cout << "Not enough" << std::endl;
        return -1;
    }
    //
    std::string s = argv[1];
    std::cout << s << std::endl;
    std::cout << "length: " << s.length() << std::endl;
    std::cout << "size: " << s.size() << std::endl;
    std::cout << "capacity: " << s.capacity() << std::endl;
    //
    s = s + argv[2];
    std::cout << s << std::endl;
    std::cout << "length: " << s.length() << std::endl;
    std::cout << "size: " << s.size() << std::endl;
    std::cout << "capacity: " << s.capacity() << std::endl;

    return 0;
}
