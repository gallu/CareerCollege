// p_9.c
// cl  p_9.c
#include <stdio.h>

typedef struct {
    int i;
    int j;
    char c;
    char d;
} _S1;
typedef struct {
    int i;
    char c;
    int j;
    char d;
} _S2;

int main() {
    printf("%d \n", sizeof(_S1));
    printf("%d \n", sizeof(_S2));
    return 0;
}
