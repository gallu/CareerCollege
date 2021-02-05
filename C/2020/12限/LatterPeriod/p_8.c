// p_8.c
// cl  p_8.c
#include <stdio.h>

typedef struct {
    int i;
} _S1;

typedef struct {
    int x;
    int y;
    int z;
    double d;
} _S2;

void hoge(_S1* ps) {
    ps->i = 10;
    printf("hoge %p \n", ps);
}

int main() {
    _S1 s1;
    hoge(&s1);
    printf("main %p \n", &s1);
    //
    _S1 as1[10];
    _S2 as2[10];
    //
    printf("%p \n", &as1[0]);
    printf("%p \n", as1);
    printf("%d \n", sizeof(_S1));
    _S1* ps1 = as1;
    ps1 ++;
    printf("%p \n", ps1);

    //
    printf("%p \n", as2);
    printf("%d \n", sizeof(_S2));
    _S2* ps2 = as2;
    ps2 ++;
    printf("%p \n", ps2);

    return 0;
}




