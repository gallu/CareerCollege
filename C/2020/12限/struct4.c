//  struct4.c
//  cl  struct4.c
#include <stdio.h>

//
typedef struct  {
    int x;
    int y;
} _coordinate ;
//
typedef struct {
    _coordinate start;
    _coordinate end;
} _line;


void set(_line *l) {
    l->start.x = 10;
    l->start.y = 20;
    l->end.x = 100;
    l->end.y = 999;
}


int main() {
    _line l;

    //
    /*
    l.start.x = 0;
    l.start.y = 10;
    l.end.x = 100;
    l.end.y = 200;
    */
    set(&l);

    printf("start(%d:%d) - end(%d:%d)\n", l.start.x, l.start.y, l.end.x, l.end.y);

    //
    return 0;
}
