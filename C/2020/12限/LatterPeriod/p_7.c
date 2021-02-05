//  p_7.c
//  cl  p_7.c
#include <stdio.h>

int main() {
    int i[] = {1, 2, 3};
    int*  pi = i;
    //
    printf("%p \n", &i[0]);
    printf("%p \n", i);
    printf("%p \n", pi);
    pi ++;
    printf("%p \n", pi);
    printf("%p \n", &i[1]);
    printf("%d \n", sizeof(int));
    pi ++;
    printf("%p \n", pi);
    printf("%p \n", &i[2]);
    printf("%p \n", (i+2));
    printf("\n");
    //
    pi = i;
    for(int count = 0; count < 3; count++) {
        printf("%d \n", i[count]);
        printf("%d \n", *pi);
        pi ++;
    }

    //
    char s[] = "abc";
    char*  ps = s;
    printf("%p \n", &s[0]);
    printf("%p \n", s);
    printf("%d \n", sizeof(char));
    ps ++;
    printf("%p \n", ps);
    printf("%p \n", &s[1]);
    ps ++;
    printf("%p \n", ps);
    printf("%p \n", &s[2]);
    //
    ps = s;
    char c;
    while( (c = *ps ++) != '\0') {
        printf("%c \n", c);
    }

    return 0;
}
