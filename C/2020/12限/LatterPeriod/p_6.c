//  p_6.c
//  cl  p_6.c
#include <stdio.h>

int main() {
    char* s1  = "abc";
    char s2[] = "abc";

    s1[0] = 'A'; // XXX
    s2[0] = 'A';

    printf("%s \n", s1);
    printf("%s \n", s2);

    return 0;
}
