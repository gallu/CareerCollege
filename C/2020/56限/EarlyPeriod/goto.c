//  goto.c
//  cl  goto.c
#include <stdio.h>

int main() {

    for(int i = 1; i < 10; i++) {
        for(int j = 1; j < 10; j++) {
            printf("%d \n", i*j);
            if (10 < (i*j)) {
                goto end;
            }
        }
    }

end:
    printf("end\n");

    return 0;
}
