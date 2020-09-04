//  func5.c
//  cl  /W4  func5.c
#include <stdio.h>

int add(int i, int j) {
    return i + j;
}
double f_add(double i, double j) {
    return i + j;
}

int main() {
    int i;
    i = add(1, 2);
    printf("%d \n", i);

    double d;
    d = f_add(1.23, 2.58);
    printf("%f \n", d);

    //
    i = add(1, 2, 3); // func5.c(22): warning C4020: 'add': 実引数が多すぎます。
    i = add(1); // func5.c(23): error C2198: 'add': 呼び出しに対する引数が少なすぎます。

    return 0;
}
