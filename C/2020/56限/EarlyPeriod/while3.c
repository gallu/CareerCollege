//  while3.c
//  cl  while3.c
#include <stdio.h>
#include <ctype.h>

int main() {
    int c;
/*
    c = getchar();
    printf("%c (%d) \n", (unsigned char)c, c);
*/
    int alpha = 0, digit = 0;

    //
    while( (c = getchar()) != EOF ) {
        if ( (c == '\n')||(c == '\r') ) {
            break;
        }
        //
        if (isalpha(c)) {
            alpha ++;
        }else if (isdigit(c)) {
            digit ++;
        }
    }
    //
    printf("alpha %d \n", alpha);
    printf("digit %d \n", digit);

    return 0;
}
