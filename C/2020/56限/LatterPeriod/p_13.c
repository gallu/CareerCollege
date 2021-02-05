//  p_13.c
//  cl  p_13.c
#include <stdio.h>
#include <stdlib.h>

int main() {
    //
    int* i_array;
    i_array = (int *)malloc( sizeof(int) * 3 );
    if (i_array == NULL) {
        return -1;
    }
    printf("%p \n", i_array);
    
    //
    int* piwk;
    piwk = realloc(i_array, sizeof(int) * 10 );
    if (piwk == NULL) {
        free(i_array);
        i_array = NULL;
        return -1;
    }
    i_array = piwk;
    printf("%p \n", i_array);
    // 以下処理

    //
    free(i_array);
    i_array = NULL;
    
    //
    return 0;
}