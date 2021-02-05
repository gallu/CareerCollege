//  p_6.c
//  cl  p_6.c
#include <stdio.h>

int main() {
    char*  s1 = "abcdefg";
    char s2[] = "abcdefg";

    s1[0] = 'Z'; // XXX
    s2[0] = 'Z';

    printf("%s \n", s1);
    printf("%s \n", s2);

    return 0;
}
