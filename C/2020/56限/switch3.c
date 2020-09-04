//   switch3.c
//   cl   /W4  switch3.c   get_line.c
#include <stdio.h>
#include <stdlib.h>
#include "get_line.h"

#define STRLENGTH 16

int main() {
    char s[STRLENGTH];
    printf("input number: ");
    get_line(s, STRLENGTH);
    //printf("input is %c \n", s[0]);
    int i = atoi(s);
    printf("%d \n", i);

    //
    switch (i) {
        case 0:
            printf("input is 0 \n");
            break;

        case 1:
        case 2:
            printf("input is 1 or 2 \n");
            break;

        default: 
            printf("input is NOT 0-2 \n");
            break;
    }

    return 0;
}

