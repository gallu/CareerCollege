//  12.cpp
//  cl  /EHsc  12.cpp
#include <iostream>
#include <string>
#include <vector>
#include <map>

int main() {
    //
    std::vector<std::map<std::string, std::string>> data = {
        {{"name", "furu"},{"address", "tokyo"}},
        {{"name", "gallu"},{"address", "japan"}},
    };
    //
    for(auto itr = data.begin(); itr != data.end(); itr ++) {
        for(auto itr2 = itr->begin(); itr2 != itr->end(); itr2 ++) {
            std::cout << itr2->first << " : " << itr2->second << std::endl;
        }
        std::cout << std::endl;
    }

    //
    return 0;
}









