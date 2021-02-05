//  p_10.c
//  cl  p_10.c
#include <stdio.h>
#include <stdlib.h>

int main() {
    int i ;
    i = 10;
    printf("%p \n", &i);
    printf("%d \n", i);

    int* pi;
    pi = malloc(sizeof(int));
    if (NULL == pi) {
        return -1;
    }
    *pi = 999;
    printf("%p \n", pi);
    printf("%d \n", *pi);
    //
    free(pi);
    pi = NULL;

    //
    char c;
    c ='A';
    printf("%p \n", &c);
    printf("%c \n", c);

    char* pc;
    pc = malloc(sizeof(char));
    if (NULL == pc) {
        return -1;
    }
    *pc = 'B';
    printf("%p \n", pc);
    printf("%c \n", *pc);
    free(pc);
    pc = NULL;

    return 0;
}

