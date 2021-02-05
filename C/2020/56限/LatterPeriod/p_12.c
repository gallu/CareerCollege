//  p_12.c
//  cl  p_12.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char *argv[]) {
    //
    printf("argc: %d \n", argc);
/*
    for(int i = 0; i < argc; i++) {
        printf("%d: %s \n", i, argv[i]);
    }
*/
    //
    if (3 > argc) {
        printf("Not enough arguments\n");
        return -1;
    }
    //
    int len = strlen(argv[1]);
    printf("len: %d \n", len);
    int len2 = strlen(argv[2]);
    printf("len2: %d \n", len2);
    //
    char* ps;
    ps = (char *)malloc( sizeof(char) * (len + 1) );
    if (ps == NULL) {
        return -1;
    }
    //
    strcpy(ps, argv[1]);
    printf("%s \n", ps);
    printf("%p \n", ps);
    
    //
    char* ps2;
    ps2 = realloc(ps, sizeof(char) * (len + len2 + 1) );
    if (ps2 == NULL) {
        free(ps);
        ps = NULL;
        return -1;
    }
    ps = NULL;
    strcpy(&ps2[len], argv[2]);
    printf("%s \n", ps2);
    printf("%p \n", ps2);

    //
    free(ps2);
    ps2 = NULL;

    return 0;
}




