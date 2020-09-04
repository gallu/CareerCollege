//   line2.c
//   cl  line2.c  get_line.c
#include <stdio.h>
#include "get_line.h"

#define  STRLENGTH  128

int main() {
    char s[STRLENGTH];
    
    get_line(s, STRLENGTH);
    printf("input is '%s' \n", s);

    return 0;
}