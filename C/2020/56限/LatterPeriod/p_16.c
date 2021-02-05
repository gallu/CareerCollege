//  p_16.c
//  cl  p_16.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
    //
    char s[3][12] = {
        "abc",
        "defghijk",
        "z",
    };
    for(int i = 0; i < 3; i ++) {
        printf("%s \n", s[i]);
    }
    //
    char** ds;
    ds = (char **)malloc( sizeof(char *) * 3 );
    if (ds == NULL) {
        return -1;
    }
    for(int i = 0; i < 3; i ++) {
        ds[i] = (char *)malloc( sizeof(char) * strlen(s[i]) + 1);
        if (ds[i] == NULL) {
            // XXX
            return -1;
        }
        strcpy(ds[i], s[i]);
    }
    for(int i = 0; i < 3; i ++) {
        printf("%d, %s \n", strlen(ds[i]), ds[i]);
    }
    //
    for(int i = 0; i < 3; i ++) {
        free(ds[i]);
        ds[i] = NULL;
    }
    free(ds);
    ds = NULL;
    
    return 0;
}


