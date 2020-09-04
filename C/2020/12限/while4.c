//  while4.c
//  cl  while4.c
#include <stdio.h>
#include <ctype.h>

int main() {
    int c;
    int alpha = 0, digit = 0;
    /*
    c = getchar();
    if (isdigit(c)) {
        printf("%c \n", (unsigned char)c);
    }
    */
    //
    while( (c = getchar()) != EOF ) {
        if ( (c == '\n')||(c == '\r') ) {
            break;
        }
        if (isdigit(c)) {
            digit ++;
        }
        if (isalpha(c)) {
            alpha ++;
        }
    }
    printf("alpha: %d \n", alpha);
    printf("digit: %d \n", digit);

    return 0;
}
