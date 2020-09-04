//  for.c
//  cl  for.c
#include <stdio.h>

int main() {

    for(int i = 0; i < 10; i ++) {
        printf("%d \n", i);
    }

    // XXX for.c(12): error C2065: 'i': 定義されていない識別子です。
    for(i = 0; i < 10; i ++) {
        printf("%d \n", i);
    }

    return 0;
}
