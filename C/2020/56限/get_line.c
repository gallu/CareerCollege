//  get_line.c
#include <stdio.h>
#include "get_line.h"

void get_line(char *s,  int size) {
    //
    if (NULL == fgets(s, size, stdin)) {
        s[0] = '\0';
        return ;
    }
    for(int i = 0; i < size; i++) {
        //printf("%c(%d) ", s[i], (int)s[i]);
        if ( ('\r' == s[i])||('\n' == s[i]) ) {
            s[i] = '\0';
            break;
        }
    }
}
