//  p_15.c
//  cl  p_15.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void ex_free(void** pps) {
    free(*pps);
    *pps = NULL;
}
void ex_free_char(char** pps) {
    ex_free((void **)pps);
}
void ex_free_int(int** pps) {
    ex_free((void **)pps);
}
int main() {
    //
    char* ps;
    ps = (char *)malloc( sizeof(char) * 64 );
    if (ps == NULL) {
        return -1;
    }
    // XXX
    printf("%p \n", ps);
    ex_free_char(&ps);
    printf("%p \n", ps);

    //
    int* pi;
    pi = (int *)malloc( sizeof(int) * 10 );
    if (pi == NULL) {
        return -1;
    }
    // XXX
    printf("%p \n", pi);
    ex_free_int(&pi);
    printf("%p \n", pi);
    
    return 0;
}
