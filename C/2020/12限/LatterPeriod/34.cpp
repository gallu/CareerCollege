//  34.cpp
//  cl  /EHsc  34.cpp
#include <iostream>
#include <string>

class Hoge {
public:
    Hoge(int v) : i(v), j(v) {}
    void print();
    //
    int operator+ (int v);
    Hoge operator= (int v);
    //
    Hoge operator+ (const Hoge &v);
    Hoge operator= (const Hoge &v);
    
private:
    int i;
    int j;
};
void Hoge::print() {
    std::cout << "i: " << this->i << std::endl;
    std::cout << "j: " << this->j << std::endl;
}
//
int Hoge::operator+ (int v) {
    return this->i + v;
}
Hoge Hoge::operator= (int v) {
    this->i = v;
    return *this;
}
//
Hoge Hoge::operator+ (const Hoge &v) {
    this->j = this->j + v.j;
    return *this;
}
Hoge Hoge::operator= (const Hoge &v) {
    this->j = v.j;
    return *this;
}

int main() {
    //
    Hoge h(10);
    h.print();
    h = h + 999;
    h.print();
    //
    Hoge h2(30);
    h2 = h + h2;
    h2.print();

    //
    std::string s1 = "abc";
    s1 = s1 + "123";
    
    return 0;
}