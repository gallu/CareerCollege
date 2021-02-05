//  p_18.c
//  cl  p_18.c
#include <stdio.h>

double add(int i, float f) {
    return (double)i + f;
}
double sub(int i, float f) {
    return (double)i - f;
}
//
void call( double (*f)(int, float) ) {
    printf("%f \n", f(1, 1.2));
}
//
int main() {
    call(add);
    call(sub);
    return 0;
}
