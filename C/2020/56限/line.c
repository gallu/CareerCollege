//   line.c
//   cl  line.c
#include <stdio.h>
#define  STRLENGTH  128

void get_line(char *s,  int size);

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

int main() {
    char s[STRLENGTH];
    
    get_line(s, STRLENGTH);
    printf("input is '%s' \n", s);

    return 0;
}