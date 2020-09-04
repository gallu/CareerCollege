//  p_5.c
//  cl  p_5.c
#include <stdio.h>

int main() {
    char* s1  = "abc";
    char s2[] = "abc";
    char s3[] = "abc";

    //
    printf("%p \n", s1);
    printf("%p \n", s2);
    printf("%p \n", s3);
    printf("%p \n", "abc");

    return 0;
}
