//  p_3.c
//  cl  p_3.c
#include <stdio.h>

int main() {
    int i = 10;
    int*  pi = &i;
    printf("%d \n", i);

    *pi = 999;
    printf("%d \n", i);

    return 0;
}
