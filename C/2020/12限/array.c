//  array.c
//  cl  array.c
#include <stdio.h>

int main() {
    int i[5] = {1, 2, 3, 4, 5};
    //printf("%d \n", i[0]);
    //printf("%d \n", i[4]);

    for(int j = 0; j < 5; j++) {
        printf("%d \n", i[j]);
    }

    // 6個目の配列を追加
    // XXX 出来ない！！！(ややこしいけど出来なくはない(後期で))

    // 配列の個数を把握
    // XXX 出来ない！！！

    return 0;
}
