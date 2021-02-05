//   if3.c
//   cl  if3.c   get_line.c
#include <stdio.h>
#include <string.h>
#include "get_line.h"

#define BUFFER 128

int main() {
    char buffer[BUFFER];

    //
    get_line(buffer, BUFFER);
    printf("input is: %s \n", buffer);

    // 
    char *s = "ABC";
    //if ( s == buffer ) {
    if ( 0 == strcmp(buffer, s) ) {
        printf("input OK!! \n");
    } else {
        printf("%s is not %s \n", buffer, s);
    }

    return 0;
}
