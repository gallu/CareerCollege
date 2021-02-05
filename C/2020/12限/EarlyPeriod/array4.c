//  array4.c
//  cl  array4.c
#include <stdio.h>

int main() {
    char s[3][10] = {
        "abc",
        "def",
        {'g', 'h', 'i', '\0'}, // XXX
    };
    //
    for(int i = 0; i < 3; i++) {
        printf("%s \n", s[i]);
    }

    return 0;
}
