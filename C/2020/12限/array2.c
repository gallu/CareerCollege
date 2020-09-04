//  array2.c
//  cl  array2.c
#include <stdio.h>

int main() {
    char c[] = {'a', 'b', 'c', 'd', 'e', '\0'};
    for(int j = 0; j < 5; j++) {
        printf("%c \n", c[j]);
    }
    printf("%s \n", c);

    char s[] = "abcde";
/*
    for(int j = 0; j < 5; j++) {
        printf("%c \n", s[j]);
    }
*/
    int j = 0;
    while(s[j] != '\0') {
        printf("%c \n", s[j]);
        j ++;
    }
    printf("%s \n", s);


    return 0;
}
