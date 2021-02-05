//  class_16.cpp
//  cl  /EHsc  class_16.cpp
#include <iostream>
#include <string>
class Hoge {
public:
    void print();
    Hoge operator=(int v);
    Hoge operator=(const Hoge &h);
    Hoge operator+(int v);
private:
    int i;
    int j;
};
//
void Hoge::print() {
    std::cout << "i: " << this->i << std::endl;
    std::cout << "j: " << this->j << std::endl;
}
Hoge Hoge::operator=(const Hoge &h) {
    this->i = h.i;
    this->j = h.j + 123;
    return *this;
}
Hoge Hoge::operator=(int v) {
    this->i = v;
    this->j = v * 2;
    return *this;
}
Hoge Hoge::operator+(int v) {
    this->i += v;
    return *this;
}

int main() {
    //
    Hoge h;
    h = 10;
    h = h + 999;
    h.print();
    //
    Hoge h2;
    h2 = h;
    h2.print();

    //
    std::string s = "abc";
    s = s + "xyz";
    std::cout << s << std::endl;
    return 0;
}
