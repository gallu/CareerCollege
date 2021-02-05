//  p_16.cpp
//  cl  /EHsc  p_16.cpp
#include <iostream>
#include <string>
#include <vector>
#include <list>
#include <map>

int main() {
    //
    std::vector<int> v = { 1, 2, 3 };
    v.push_back(999);
    for(auto itr = v.begin(); itr != v.end(); itr ++) {
        std::cout << *itr << "\t";
    }
    std::cout << std::endl;
    v.pop_back();
    v.pop_back();
    for(auto itr = v.begin(); itr != v.end(); itr ++) {
        std::cout << *itr << "\t";
    }
    std::cout << std::endl;
    v.clear();
    std::cout << v.size() << std::endl;

    //
    std::list<int> l = { 1, 2, 3 };
    l.push_back(999);
    l.push_front(1111);
    for(auto itr = l.begin(); itr != l.end(); itr ++) {
        std::cout << *itr << "\t";
    }
    std::cout << std::endl;

    //
    std::map<std::string, int> m = {
        {"a", 1},
        {"b", 2},
        {"c", 3},
    };
    //
    auto k = m.find("a");
    if (k != m.end()) {
        std::cout << k->first << "\t" << k->second << std::endl;
    } else {
        std::cout << "a is not find." << std::endl;
    }
    std::cout << "count is " << m.count("a") << std::endl;
    //
    k = m.find("xyz");
    if (k != m.end()) {
        std::cout << k->first << "\t" << k->second << std::endl;
    } else {
        std::cout << "xyz is not find." << std::endl;
    }
    std::cout << "count is " << m.count("xyz") << std::endl;

    //
    return 0;
}








