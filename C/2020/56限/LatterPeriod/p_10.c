//  p_10.c
//  cl  p_10.c
#include <stdio.h>
#include <stdlib.h>

int main() {
    //
    int i;
    i = 10;
    printf("%d \n", i);
    //
    int*  pi;
    pi = (int *)malloc( sizeof(int) );
    if (pi == NULL) {
        return -1;
    }
    *pi = 999;
    printf("%d \n", *pi);
    free(pi);
    pi = NULL;

    //
    char c;
    c = 'A';
    printf("%c \n", c);
    //
    char* pc;
    pc = (char *)malloc(sizeof(char));
    if (pc == NULL) {
        return -1;
    }
    *pc = 'Z';
    printf("%c \n", *pc);
    free(pc);
    pc = NULL;

    return 0;
}

