//  while3.c
//  cl  while3.c
#include <stdio.h>

int main() {
    int c;
    /*
    c = getchar();
    printf("%c(%d) \n", (unsigned char)c, c);
    printf("%d \n", EOF);
    */
    while( (c = getchar()) != EOF ) {
        //
        if ((c == '\n')||(c == '\r')) {
            printf("cr-lf end\n");
            break;
        }
        printf("%c(%d) \n", (unsigned char)c, c);
    }

    return 0;
}
