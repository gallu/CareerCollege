//   line.c
//   cl   line.c
#include <stdio.h>
#define STRMAXLENGTH 128

void get_line(char *s, int size);

void get_line(char *s, int size) {
    //
    if (NULL == fgets(s, size, stdin)) {
        s[0] = '\0';
        return ;
    }
    //
    for(int i = 0; i < size; i ++) {
        //printf("%c(%d) ", s[i], (int)s[i]);
        if ( ('\n' == s[i])||('\r' == s[i]) ) {
            s[i] = '\0';
            break;
        }
    }
}

int  main()  {
    char s[STRMAXLENGTH];

    get_line(s, STRMAXLENGTH);
    printf("input is '%s'\n", s);

    return 0;
}
