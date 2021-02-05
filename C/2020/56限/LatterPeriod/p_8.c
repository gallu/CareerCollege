//  p_8.c
//  cl  p_8.c
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

void hoge(_S1 *ps1) {
    ps1->i = 999;
    printf("%p \n", ps1);
}

int main() {
    _S1 s1;
    printf("%p \n", &s1);
    hoge(&s1);

    //
    _S1 as1[10];
    _S1*  pas1 = as1;
    printf("%p \n", &as1[0]);
    printf("%p \n", pas1);
    printf("%d \n", sizeof(_S1));
    pas1 ++;
    printf("%p \n", pas1);

    //
    _S2 as2[10];
    _S2*  pas2 = as2;
    printf("%p \n", pas2);
    printf("%d \n", sizeof(_S2));
    pas2 ++;
    printf("%p \n", pas2);
    
    return 0;
}

