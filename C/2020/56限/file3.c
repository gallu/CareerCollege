//  file3.c
//  cl  file3.c
#include <stdio.h>

int main() {
    //
    FILE *fp;
    //fp = fopen("file.txt", "w");
    fp = fopen("file.txt", "a");
    if (NULL == fp) {
        printf("error\n");
        return 0;
    }

    int r;
    r = fputs("abcdefg\n", fp);
    printf("%d \n", r);
    printf("EOF: %d \n", EOF);
    //
    r = fprintf(fp, "add is %08d \n", 10 + 20);
    printf("%d \n", r);


    //
    fclose(fp);

    return 0;
}
