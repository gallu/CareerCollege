//  class_17.cpp
//  cl  /EHsc  class_17.cpp
#include <iostream>

class Hoge {
public:
    Hoge() : i(0) {};
    void print() {
        std::cout << "i: " << this->i << std::endl;
    }
    //
    Hoge operator=(int v) {
        this->i = v * 2;
        return *this;
    }
    int operator+(int v) {
        return this->i - v;
    }
    int operator+=(int v) {
        this->i = this->i + v;
        return this->i;
    }
private:
    int i;
};

int main() {
    //
    Hoge h;
    h = h + 20;
    h.print();
    h += 100;
    h.print();

    return 0;
}