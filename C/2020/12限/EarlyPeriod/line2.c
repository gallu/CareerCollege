//  line2.c
//  cl  line2.c  get_line.c
#include <stdio.h>
#include "get_line.h"
#define STRMAXLENGTH 128


int  main()  {
    char s[STRMAXLENGTH];

    get_line(s, STRMAXLENGTH);
    printf("input is '%s'\n", s);

    return 0;
}
