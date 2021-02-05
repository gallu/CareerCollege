//  p_20.c
//  cl  p_20.c
#include <stdio.h>

int hoge(void) {
    return 999;
}
//
//int(*get(void))(void) {
typedef int(*hoge_t)(void);
hoge_t get(void) {
    return hoge;
}

//
int main() {
    //
    int (*f)(void);
    f = get();
    printf("%d \n", f());

    return 0;
}