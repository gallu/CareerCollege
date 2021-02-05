//  file2.c
//  cl  file2.c
#include <stdio.h>
#define BUFSIZE 512

int main() {
    //
    FILE *fp;
    fp = fopen("file.c", "r");
    if (NULL == fp) {
        return 0;
    }

    //char *r;
    char buf[BUFSIZE];
    //r = fgets(buf, BUFSIZE, fp);
    //printf("%p, %p : %s\n", r, buf, buf);
    //while((r = fgets(buf, BUFSIZE, fp)) != NULL) {
    while(fgets(buf, BUFSIZE, fp) != NULL) {
        printf(": %s", buf);
    }

    //
    fclose(fp);

    return 0;
}
