//  func4.c
//  cl  func4.c
#include <stdio.h>

void change(char *s) {
    s[0] = 'A';
}

int main() {
    char s[128] = "xyz";
    change(s);
    printf("%s \n", s);

    return 0;
}
