//  p_15.c
//  cl  p_15.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void ex_free(void **pp) {
    free(*pp);
    *pp = NULL;
}
//
int main() {
    //
    char as[3][12] = {
        "abc",
        "defghijklmn",
        "z",
    };
    for(int i = 0; i < 3; i ++) {
        printf("%s \n", as[i]);
    }
    //
    char** s;
    s = (char **)malloc(sizeof(char *) * 3);
    if (s == NULL) {
        return -1;
    }
    for(int i = 0; i < 3; i++) {
        s[i] = (char *)malloc(sizeof(char) * strlen(as[i]) + 1);
        if (s[i] == NULL) {
            break; // XXX
        }
        strcpy(s[i], as[i]);
        printf("%d \n", strlen(as[i]) + 1);
        printf("%s \n", s[i]);
    }
    for(int i = 0; i < 3; i++) {
        ex_free((void **)&s[i]);
    }
    free(s);
    s = NULL;

    return 0;
}
