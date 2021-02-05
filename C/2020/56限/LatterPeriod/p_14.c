//  p_14.c
//  cl  p_14.c
#include <stdio.h>

int main() {
    int i;
    int* pi = &i;
    int** ppi = &pi;
    int*** pppi = &ppi;
    //
    printf("%p \n", &i);
    printf("%p \n", pi);
    printf("%p \n", &pi);
    printf("%p \n", ppi);
    printf("%p \n", &ppi);
    printf("%p \n", pppi);
    
    //
    i = 10;
    printf("%d \n", i);
    *pi = 20;
    printf("%d \n", i);
    **ppi = 30;
    printf("%d \n", i);
    ***pppi = 99;
    printf("%d \n", i);

    return 0;
}

