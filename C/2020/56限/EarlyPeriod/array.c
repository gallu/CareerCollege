//  array.c
//  cl  array.c
#include <stdio.h>

int main() {
    int i[5] = {1, 2, 3, 4, 5};
    //int i[] = {1, 2, 3, 4, 5};
    //int i[3] = {1, 2, 3, 4, 5};
/*
    int i[3];
    i[0] = 1;
    i[1] = 2;
    i[2] = 3;
    i[3] = 4;
    //
    printf("%d \n", i[0]);
    printf("%d \n", i[3]);
*/
    for(int j = 0; j < 5; j++) {
        printf("%d \n", i[j]);
    }

    // XXX 配列の個数は取得できない！！！

    // XXX 配列の個数は変更できない！！！(厳密には無理じゃないけど面倒)

    return 0;
}
