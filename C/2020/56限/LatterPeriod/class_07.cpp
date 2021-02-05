//  class_07.cpp
//  cl  /EHsc  class_07.cpp
#include <iostream>

class Hoge {
public:
    // constructer
    Hoge(int i);
    void p();
private:
    int i;
};
//
Hoge::Hoge(int i) {
    this->i = i;
}
void Hoge::p() {
    std::cout << i << std::endl;
}
//
int main() {
    //
    Hoge h(999);
    h.p();
    
    return 0;
}