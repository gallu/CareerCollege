//  struct3.c
//  cl  struct3.c
#include <stdio.h>

typedef struct  {
    int x;
    int y;
} _coordinate ;

//
void set(_coordinate *c) {
    //(*c).x = 10;
    //(*c).y = 99;
    c->x = 10;
    c->y = 99;
}
/*
_coordinate set(void) {
    _coordinate c;
    c.x = 10;
    c.y = 99;

    return c;
}
*/

int main() {
    _coordinate c;
    set(&c);
    printf("x:%d, y:%d \n", c.x, c.y);

    return 0;
}
