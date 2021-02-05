//  11.cpp
//  cl  /EHsc  11.cpp
#include <iostream>
#include <string>
#include <map>

int main() {
    //
    std::map< std::string, int > m = {
        {"a", 1},
        {"b", 2},
    };
    m["ccc"] = 3;
    //
    for(std::map<std::string, int>::const_iterator itr = m.begin(); itr != m.end(); itr++) {
        std::cout << itr->first << ":" << itr->  << std::endl;
    }
    for(auto itr = m.begin(); itr != m.end(); itr++) {
        std::cout << itr->first << ":" << itr->second << std::endl;
    }
    
    //
    return 0;
}







