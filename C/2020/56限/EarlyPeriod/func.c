//  func.c
//  cl  /W4  func.c
#include <stdio.h>

void func(int i) {
    printf("func: %d \n", i);
}

int main() {
    //
    func(10);
    //func();
    //func(10, 20);
    //func(3.14);
    //func("ancd");
    //int i = func(10);

    return 0;
}
