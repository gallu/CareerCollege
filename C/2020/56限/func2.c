//  func2.c
//  cl  func2.c
#include <stdio.h>

int add(int i, int j) {
    int total;
    total = i + j;

    return total;
}

int main() {
    int a;
    a = add(123, 456);
    printf("%d \n", a);

    return 0;
}
