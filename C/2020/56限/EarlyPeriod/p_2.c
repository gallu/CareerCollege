//  p_2.c
//  cl  p_2.c
#include <stdio.h>

void foo(int* pi) {
    (*pi) += 999;
    printf("foo : %d \n", *pi);
    printf("foo : %p \n", pi);
}

void hoge(int i) {
    i += 100;
    printf("hoge: %d \n", i);
    printf("hoge: %p \n", &i);
}

int main() {
    int i = 10;
    hoge(i);
    printf("main: %d \n", i);
    printf("main: %p \n", &i);
    printf("\n");

    int*  pi = &i;
    foo(pi);
    printf("main: %d \n", i);
    printf("main: %p \n", &i);


    return 0;
}
