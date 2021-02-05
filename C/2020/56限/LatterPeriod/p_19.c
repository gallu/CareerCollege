//  p_19.c
//  cl  p_19.c
#include <stdio.h>
//
float add(int i, float f) {
    return i + f;
}
float sub(int i, float f) {
    return i - f;
}
//
void call( float (*f)(int, float) ) {
    printf("%f \n", f(10, 5.5));
}
//
int main() {
    //
    call(add);
    call(sub);
    //
    return 0;
}