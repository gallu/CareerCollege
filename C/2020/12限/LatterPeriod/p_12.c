//  p_12.c
//  cl  p_12.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
    int* pi;
    pi = (int *)malloc( sizeof(int) * 3 );
    if (pi == NULL) {
        return -1;
    }
    
    //
    int* piwk;
    piwk = (int *)realloc(pi, sizeof(int) * 10);
    if (piwk == NULL) {
        free(pi);
        pi = NULL;
        return -1;
    }
    pi = piwk;
    //
    for(int i = 0; i < 10; i++) {
        pi[i] = i * i;
    }
    for(int i = 0; i < 10; i++) {
        printf("%d \n", pi[i]);
    }

    //
    free(pi);
    pi = NULL;
    
    return 0;
}