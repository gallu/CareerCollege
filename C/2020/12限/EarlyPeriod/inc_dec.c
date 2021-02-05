//  inc_dec.c
//  cl  inc_dec.c
#include <stdio.h>

int main() {
    int i = 0;
    i ++;
    ++ i;
    printf("%d \n", i);
    i --;
    -- i;
    printf("%d \n", i);
    //
    printf("%d \n", i ++); // 0
    printf("%d \n", ++ i); // 2

    return 0;
}
