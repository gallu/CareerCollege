//  p_1.c
//  cl  p_1.c
#include <stdio.h>

int main() {
    int i = 10;
    printf("%d \n", i);
    printf("%p \n", &i);

    int*  pi;
    pi = &i;
    printf("%p \n", pi);

    return 0;
}
