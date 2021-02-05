// 14.cpp
// cl  /EHsc  14.cpp
#include <iostream>
#include <map>
#include <string>

int main() {
    //
    std::map<std::string, int> m = {
        {"a", 1},
        {"b", 2},
    };
    //m["c"] = 333;
    m.insert(std::make_pair("c", 333));
    //m["a"] = 999;
    m.insert(std::make_pair("a", 999));
    //
    for(auto itr = m.begin(); itr != m.end(); itr ++) {
        std::cout << itr->first << "\t" << itr->second << std::endl;
    }
    std::cout << std::endl;
    
    //
    std::multimap<std::string, int> mm = {
        {"a", 1},
        {"b", 2},
    };
    mm.insert(std::make_pair("c", 333));
    mm.insert(std::make_pair("a", 999));
    //
    for(auto itr = mm.begin(); itr != mm.end(); itr ++) {
        std::cout << itr->first << "\t" << itr->second << std::endl;
    }

    //
    return 0;
}
