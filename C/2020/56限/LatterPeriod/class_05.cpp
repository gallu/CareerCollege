//  class_05.cpp
//  cl  /EHsc  class_05.cpp
#include <iostream>
class Hoge {
public:
    void set_i(int v);
    int get_i(void);
    int get_ii(int i);

private:
    int _i;
    //int i_;
    //int i;
};
//
void Hoge::set_i(int v) {
    _i = v;
}
int Hoge::get_i(void) {
    return _i;
}
int Hoge::get_ii(int i) {
    return _i;
}
int main() {
    //
    Hoge h;
    h.set_i(123);
    std::cout << h.get_i() << std::endl;
    std::cout << h.get_ii(999) << std::endl;
    
    return 0;
}
