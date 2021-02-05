//   if2.c
//   cl   if2.c
#include <stdio.h>

int main() {
    int i = 10;
    //
    if (i == 10) {
        printf("i is 10\n");
    } else {
        printf("i is not 10\n");
    }
    // XXX /W4 を付けるとwarningが出る
    if (i = 20) {
        printf("i is 20 ....?\n");
    } else {
        printf("i is not 20\n");
    }

    return 0;
}
