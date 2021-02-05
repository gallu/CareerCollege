//  16.cpp
//  cl  /EHsc  16.cpp
#include <iostream>
#include <vector>
#include <list>
#include <map>
#include <string>

int main() {
    //
    std::vector<int> v = {1, 2, 3};
    std::cout << v.size() << std::endl;
    v.push_back(999);
    for(auto itr = v.begin(); itr != v.end(); itr ++) {
        std::cout << *itr << std::endl;
    }
    v.clear();
    std::cout << v.size() << std::endl;
    //
    std::list<int> l = {1, 2, 3};
    l.push_back(999);
    l.push_front(111);
    for(auto itr = l.begin(); itr != l.end(); itr ++) {
        std::cout << *itr << std::endl;
    }

    //
    std::map<std::string, int> m  = {
        {"a", 1},
        {"b", 2},
        {"c", 3},
    };
    auto key = m.find("a");
    if (key != m.end()) {
        std::cout << key->first << "\t" << key->second << std::endl;
    } else {
        std::cout << "a not find" << std::endl;
    }
    key = m.find("xyz");
    if (key != m.end()) {
        std::cout << key->first << "\t" << key->second << std::endl;
    } else {
        std::cout << "xyz not find" << std::endl;
    }

    //
    return 0;
}