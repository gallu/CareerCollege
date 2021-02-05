//  21.cpp
//  cl  /EHsc  21.cpp
#include <iostream>
#include <string>

class Hoge {
    public:
        void set_i(int v);
        int get_i();
        int get_ii(int i);
    private:
        //int _i;
        //int i_;
        int i;
};
//
void Hoge::set_i(int v) {
    //i_ = v;
    this->i = v;
}
int Hoge::get_i() {
    //return i_;
    return this->i;
}
int Hoge::get_ii(int i) {
    //return i_;
    return this->i; // XXX
}

int main() {
    //
    Hoge h;
    h.set_i(999);
    std::cout << h.get_i() << std::endl;
    std::cout << h.get_ii(0) << std::endl;
    
    return 0;
}