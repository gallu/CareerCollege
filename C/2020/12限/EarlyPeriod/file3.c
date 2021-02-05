//  file3.c
//  cl file3.c
#include <stdio.h>

int main() {
    FILE *fp;
    //fp = fopen("file.txt", "w");
    fp = fopen("file.txt", "a");

    //
    int r;
    r = fputs("abcdefg\n", fp);
    printf("fputs: %d \n", r);

    //
    r = fprintf(fp, "%d \n", 10 * 20);
    printf("fprintf: %d \n", r);

    //
    printf("EOF : %d \n", EOF);

    //
    fclose(fp);

    return 0;
}
