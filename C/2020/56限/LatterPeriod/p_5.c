//  p_5.c
//  cl  p_5.c
#include <stdio.h>

int main() {
    char*  s1 = "abcdefg";
    char s2[10] = "abcdefg";
    char s3[] = "abcdefg";

    //
    printf("%p \n", s1);
    printf("%p \n", s2);
    printf("%p \n", s3);
    printf("%p \n", "abcdefg");

    return 0;
}
