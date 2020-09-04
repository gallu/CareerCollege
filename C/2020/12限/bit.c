//  bit.c
//  cl  bit.c
#include <stdio.h>

int main() {
    int i = 0xff;
    int j = 0x0f;

    // and
    printf("%x and %x is 0x%x\n", i, j, i & j);
    // or
    printf("%x od %x is 0x%x\n", i, j, i | j);

    //
    printf("%x >>(1) %x\n", i, i >> 1); // 1111 1111 → 0111 1111
    printf("%x >>(2) %x\n", i, i >> 2); // 1111 1111 → 0011 1111
    printf("%x <<(1) %x\n", i, i << 1); // ‭0001 1111 1110‬
    printf("%x <<(2) %x\n", i, i << 2); // ‭0011 1111 1100‬

    return 0;
}













