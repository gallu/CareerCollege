//  p_18.c
//  cl  p_18.c
#include <stdio.h>

void func_1(void) {}
void func_2(int i) {}
int func_3(float f) { return 0; }
char func_4(float f, float f2) { return 'a'; }

int main() {
    //
    printf("%p \n", func_1);
    void (*f1)(void);
    f1 = func_1;
    printf("%p \n", f1);
    //
    void (*f2)(int);
    f2 = func_2;
    printf("%p \n", f2);
    //
    int (*f3)(float);
    f3 = func_3;
    printf("%p \n", f3);
    //
    char (*f4)(float, float);
    f4 = func_4;
    printf("%p \n", f4);

    return 0;
}