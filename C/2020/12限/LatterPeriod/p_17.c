//  p_17.c
//  cl  p_17.c
#include <stdio.h>

void func_1(void) {}
int func_2(void) { return 1; }
double func_3(int i, float f) { return (double)i * f; }

int main() {
    //
    printf("%p \n", func_1);
    void (*f1)(void);
    f1 = func_1;
    printf("%p \n", f1);
    //
    int (*f2)(void);
    f2 = func_2;
    printf("%p \n", f2);
    //
    double (*f3)(int, float);
    f3 = func_3;
    printf("%p \n", f3);

    return 0;
}
