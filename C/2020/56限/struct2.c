//  struct2.c
//  cl  struct2.c
#include <stdio.h>

typedef struct {
    int x;
    int y;
} coordinate ;

void set(coordinate *c) {
    //(*c).x = 10;
    //(*c).y = 99;
    c->x = 10;
    c->y = 99;
}
/*
coordinate set() {
    coordinate c;
    c.x = 10;
    c.y = 99;
    return c;
}*/

int main() {
    coordinate c;
    set(&c);
    printf("x: %d, y: %d \n", c.x, c.y);

    return 0;
}
