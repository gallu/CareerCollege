//  file2.c
//  cl  file2.c
#include <stdio.h>
#define STRBUF 512

int main() {
    FILE *fp;
    fp = fopen("file.c", "r");

    // ファイルの読み込み
    char buf[STRBUF];
    char *r;
    //
    /*
    r = fgets(buf, STRBUF, fp);
    printf("%p : %s \n", r, buf);
    */
    //while((r = fgets(buf, STRBUF, fp)) != NULL) {
    while(fgets(buf, STRBUF, fp) != NULL) {
        printf(": %s ", buf);
    }

    //
    fclose(fp);

    return 0;
}
