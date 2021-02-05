//  20.cpp
//  cl  /EHsc  20.cpp
#include <iostream>
#include <string>

class Hoge {
    public:
        void set_i(int i);
        int get_i();
    private:
        int i;
};
//
void Hoge::set_i(int i) {
    this->i = i;
}
int Hoge::get_i() {
    return this->i;
}

int main() {
    //
    Hoge h;
    //h.i = 100;
    h.set_i(999);
    std::cout << h.get_i() << std::endl;
    
    return 0;
}