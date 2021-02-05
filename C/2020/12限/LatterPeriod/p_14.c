//  p_14.c
//  cl  p_14.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void ex_free(void** p) {
    printf("ex_free: %p \n", p);
    free(*p);
    *p = NULL;
}

int main() {
    //
    int* pi;
    pi = (int *)malloc(sizeof(int) * 10);
    if (pi == NULL) {
        return -1;
    }
    pi[0] = 10;
    pi[9] = 99;
    //
    printf("%p \n", pi);
    printf("pointer: %p \n", &pi);
    ex_free((void **)&pi);
    printf("%p \n", pi);

    //
    char* s;
    s = (char *)malloc(sizeof(char) * 64);
    if (s == NULL) {
        return -1;
    }
    ex_free((void **)&s);
    printf("%p \n", s);
    
    return 0;
}
