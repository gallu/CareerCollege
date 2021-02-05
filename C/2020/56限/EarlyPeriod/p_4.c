//  p_4.c
//  cl  p_4.c
#include <stdio.h>

int main() {
    int* pi;
    printf("%p \n", pi);

    *pi = 100; // XXX

    return 0;
}
