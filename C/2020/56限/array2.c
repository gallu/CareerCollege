//  array2.c
//  cl  array2.c
#include <stdio.h>

int main() {
    char c[4] = {'a', 'b', 'c', '\0'};
    for(int i = 0; i < 3; i++) {
        printf("%c \n", c[i]);
    }
    printf("%s \n\n", c);

    char s[4] = "abc";
/*
    for(int i = 0; i < 3; i++) {
        printf("%c \n", s[i]);
    }
*/
    int i = 0;
    while(s[i] != '\0') {
        printf("%c \n", s[i]);
        i ++;
    }
    printf("%s \n\n", s);

    return 0;
}
