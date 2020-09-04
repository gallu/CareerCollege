//  cal_val.c
//  cl  cal_val.c
#include <stdio.h>

int main() {
    int  i = 10;
    printf("i is %d \n", i);
    
    int  j = 20;
    printf("i is %d , j is %d \n", i, j);
    
    double  d = 1.23;
    printf("d is %lf \n", d);

    // 0 padding
    printf("%05d \n", i);
    // space padding
    printf("%5d \n", i);

    //
    d = 1.23456789;
    printf("%.3lf \n", d);
    printf("%.4lf \n", d);
    printf("%.5lf \n", d);

    return 0;
}



