//  class_04.cpp
//  cl  /EHsc  class_04.cpp
#include <iostream>

class Hoge {
public:
    void set_i(int i);
    int get_i(void);

private:
    int i;
};
//
void Hoge::set_i(int i) {
    this->i = i;
}
int Hoge::get_i(void) {
    return this->i;
}

int main() {
    //
    Hoge h;
    h.set_i(123);
    std::cout << h.get_i() << std::endl;
    
    return 0;
}
