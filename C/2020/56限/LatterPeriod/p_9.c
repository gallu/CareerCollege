//  p_9.c
//  cl  p_9.c
#include <stdio.h>

typedef struct {
    int i;
    int j;
    char c1;
    char c2;
} _S1;

typedef struct {
    char c1;
    int i;
    char c2;
    int j;
} _S2;

int main() {
    printf("%d \n", sizeof(_S1));
    printf("%d \n", sizeof(_S2));

    return 0;
}
