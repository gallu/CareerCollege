//  p_19.c
//  cl  p_19.c
#include <stdio.h>

int hoge(void) {
    return 999;
}

//int(*foo(void))(void) {
typedef  int(*hoge_t)(void) ;
hoge_t foo(void) {
    return hoge;
}
//
int main() {
    int (*f)(void);
    f = foo();
    printf("%d \n", f());

    return 0;
}
