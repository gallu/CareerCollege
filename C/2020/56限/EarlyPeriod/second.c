//  second.c
//  cl  second.c
#include <stdio.h>

int main() {
    int  i = 44;
    int  j = 66;
    int  k;
    k = i + j;
    printf("%d + %d = %d\n", i, j, k);

    //
    double d = 0.1;
    double f = 0.2;
    double g = 0.3;
    printf("%lf\n", d + f);
    printf("%lf\n", g);
    printf("%.28lf\n", d + f);
    printf("%.28lf\n", g);

    return 0;
}