//  array4.c
//  cl  array4.c
#include <stdio.h>

int main() {
    char s[3][5] = {
        "ab",
        "defg",
        {'x', 'y', 'z', '\0'},
    };
    for(int i = 0; i < 3; i++) {
        printf("%s \n", s[i]);
    }

    //
    for(int i = 0; i < 3; i++) {
        for(int j = 0; j < 5; j++) {
            printf("%c ", s[i][j]);
        }
        printf("\n");
    }

    return 0;
}
