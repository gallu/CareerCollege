//  array3.c
//  cl  array3.c
#include <stdio.h>

int main() {
    int i[3][4] = {
        {1, 2, 3, 4},
        {5, 6, 7, 8},
        {11,22,33,44},
    };
    //
    for(int j = 0; j < 3; j ++) {
        for(int k = 0; k < 4; k ++) {
            printf("%d ", i[j][k]);
        }
        printf("\n");
    }

    return 0;
}
