//   print_string.c
//   cl   print_string.c
#include <stdio.h>

int main() {
    char *s1 = "string 1";
    char s2[] = "string 2";
    printf("%s \n", s1);
    printf("%s \n", s2);

    char c = 'A';
    printf("%c \n", c);

    //
    printf("%c \n", s1[1]);
    // \0
    printf("%c, %d, %x \n", s1[8] ,(int)s1[8] ,(int)s1[8]);
    printf("%c, %d, %x \n", s1[0] ,(int)s1[0] ,(int)s1[0]);

    return 0;
}