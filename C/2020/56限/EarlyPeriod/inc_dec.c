//  inc_dec.c
//  cl  inc_dec.c
#include <stdio.h>

void hoge(int i, int j, int k) {
    printf("%d, %d, %d\n", i, j, k);
}

int main() {
    int i = 0;
    i ++; // 後置
    printf("%d \n", i);
    ++ i; // 前置
    printf("%d \n", i);
    i --;
    printf("%d \n", i);
    -- i;
    printf("%d \n", i);
    //
    printf("%d \n", i ++);
    printf("%d \n", ++ i);
    //
    i = 0;
    hoge(i++, i++, i++);
    i = 0;
    hoge(++i, ++i, ++i);

    return 0;
}
