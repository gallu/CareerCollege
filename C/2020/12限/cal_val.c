//  cal_val.c
//  cl   cal_val.c
#include <stdio.h>

int main() {
    int  i = 10;
    printf("i is %d\n", i);

    int  j = 20;
    printf("i is %d, j is %d\n", i, j);

    float f = 1.0;
    printf("f is %f\n", f);

    // 0 padding
    printf("%05d\n", i);
    // space padding
    printf("%5d\n", i);

    //
    f = 1.23456789;
    printf("%.2f\n", f);
    printf("%.3f\n", f);
    printf("%.4f\n", f);

    return 0;
}




