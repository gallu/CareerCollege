//  struct3.c
//  cl  struct3.c
#include <stdio.h>

typedef struct {
    int x;
    int y;
} coordinate ;
//
typedef struct {
    coordinate start;
    coordinate end;
} line ;

//
void set(line *l) {
    l->start.x = 10;
    l->start.y = 20;
    l->end.x = 100;
    l->end.y = 999;
}

//
int main() {
    line l;
    set(&l);
    printf("(%d, %d) - (%d, %d)\n", l.start.x, l.start.y, l.end.x, l.end.y);

    return 0;
}
