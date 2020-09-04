//  switch.c
//  cl  switch.c  get_line.c
#include <stdio.h>
#include "get_line.h"

#define STRSIZE 128

int main() {
    char s[STRSIZE];
    get_line(s, STRSIZE);
    //printf("input is %c \n", s[0]);

    //
    /*
    if (s[0] == 'a') {
        printf("input is a \n");
    } else if (s[0] == 'b') {
        printf("input is b \n");
    } else if (s[0] == 'c') {
        printf("input is c \n");
    } else {
        printf("input is not [a,b,c] \n");
    }
    */
    //
    switch (s[0]) {
        case 'a':
        case 'A':
            printf("input is a \n");
            break;

        case 'b':
        case 'B':
            printf("input is b \n");
            break;

        case 'c':
        case 'C':
            printf("input is c \n");
            break;

        default:
            printf("input is not [a,b,c] \n");
            break;
    }

    return 0;
}
