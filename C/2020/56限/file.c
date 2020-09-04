//  file.c
//  cl  file.c
#include <stdio.h>
#include <errno.h>

#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

int main() {
    //
    FILE *fp;
    fp = fopen("file.c", "r");
    printf("%p (%d) \n", fp, errno);

    fp = fopen("dummy", "r");
    printf("%p (%d) \n", fp, errno);

    fopen_s(&fp, "file.c", "r");
    printf("%p \n", fp);

    int fd;
    fd = open("file.c", 0);
    printf("%d \n", fd);

    return 0;
}
