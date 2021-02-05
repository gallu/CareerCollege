//  switch2.c
//  cl  switch2.c
#include <stdio.h>
#include "get_line.h"

/*
switch2.c(12): error C2050: switch 式の結果は、整数値になりませんでした。
switch2.c(13): error C2051: case 式は、整数型定数でなければなりません。
 */

#define STRLENGTH 16

int main() {
    char s[STRLENGTH];
    get_line(s, STRLENGTH);

    switch(s) {
        case "ABC":
            printf("input is ABC \n");
            break;

        default:
            printf("input is NOT ABC \n");
            break;
    }

    return 0;
}

