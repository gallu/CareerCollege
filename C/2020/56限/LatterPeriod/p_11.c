//  p_11.c
//  cl  p_11.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
    //
    char* s;
    s = (char *)malloc(sizeof(char) * 11);
    if (s == NULL) {
        return -1;
    }
    //
    memcpy(s, "abc", 4);
    printf("%s \n", s);
    //
    free(s);
    s = NULL;

    //
    double* pd;
    pd = (double *)malloc(sizeof(double) * 10);
    if (pd == NULL) {
        return -1;
    }
    //
    pd[0] = 1.1;
    pd[1] = 1.2;
    pd[8] = 8.8;
    for(int i = 0; i < 10; i++) {
        printf("%f \n", pd[i]);
    }
    //
    free(pd);
    pd = NULL;

    return 0;
}
