//  p_14.cpp
//  cl  /EHsc  p_14.cpp
#include <iostream>
#include <map>
#include <string>

int main() {
    //
    std::map<std::string, int> m = {
        {"c", 1},
        {"b", 2},
    };
    m["a"] = 3;
    m["c"] = 1111;
    for(auto itr = m.begin(); itr != m.end(); itr++ ) {
        std::cout << itr->first << "\t" << itr->second << std::endl;
    }
    std::cout << std::endl;

    //
    std::multimap<std::string, int> mm = {
        {"c", 1},
        {"b", 2},
    };
    mm.insert(std::make_pair("a", 3));
    mm.insert(std::make_pair("c", 111));
    for(auto itr = mm.begin(); itr != mm.end(); itr++ ) {
        std::cout << itr->first << "\t" << itr->second << std::endl;
    }

    return 0;
}