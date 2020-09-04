//  struct2.c
//  cl  struct2.c
#include <stdio.h>

typedef struct {
    int x;
    float y;
} _coordinate;

int main() {
    _coordinate c;
    c.x = 10;
    c.y = 99.9;
    printf("x:%d, y:%f \n", c.x, c.y);

    return 0;
}

