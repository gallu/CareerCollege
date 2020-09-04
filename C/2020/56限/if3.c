//  if3.c
//  cl  if3.c  get_line.c
#include <stdio.h>
#include <string.h>
#include "get_line.h"

#define STRLENGTH 128

int main() {
    char s[STRLENGTH];

    get_line(s, STRLENGTH);
    printf("input is %s \n", s);

    //
    char *s2 = "ABC";
    //if (s == s2) {
    if (0 == strcmp(s, s2)) {
        printf("OK !!!\n");
    } else {
        printf("%s is NOT %s \n", s, s2);
    }

    return 0;
}
