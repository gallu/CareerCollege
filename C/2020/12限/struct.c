//  struct.c
//  cl  struct.c
#include <stdio.h>

struct coordinate {
    int x;
    int y;
};

int main() {
    struct coordinate c;
    c.x = 10;
    c.y = 99;
    printf("x:%d, y:%d \n", c.x, c.y);

    return 0;
}
