//  p_3.c
//  cl  p_3.c
#include <stdio.h>

int main() {
    int i = 10;
    int*  pi = &i;

    //
    printf("%d \n", i);
    i += 5;
    printf("%d \n", i);

    //
    *pi = 99;
    printf("%d \n", i);
    printf("%d \n", *pi);


    return 0;
}
