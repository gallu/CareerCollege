//  p_7.c
//  cl  p_7.c
#include <stdio.h>

int main() {
    //
    printf("char %d \n", sizeof(char));
    printf("int %d \n", sizeof(int));
    printf("double %d \n", sizeof(double));
    printf("\n");
    
    double ad[] = {1.1, 2.2, 3.3};
    double*  pad = ad;
    printf("%p \n", pad);
    pad++;
    printf("%p \n", pad);
    printf("\n");

    int ai[] = {1, 2, 3};
    printf("%p \n", &ai[0]);
    printf("%p \n", ai);
    int*  pai = ai;
    pai ++;
    printf("%p \n", &ai[1]);
    printf("%p \n", pai);
    printf("\n");
    //
    for(int i = 0; i < 3; i++) {
        printf("int: %d \n", ai[i]);
    }
    printf("\n");

    //
    char s[] = "abc";
    printf("%p \n", &s[0]);
    printf("%p \n", s);
    char* ps = s;
    ps ++;
    printf("%p \n", &s[1]);
    printf("%p \n", ps);
    //
    char c;
    ps = s;
    while( (c = *ps ++) != '\0') {
        printf("%c \n", c);
    }

    return 0;
}








