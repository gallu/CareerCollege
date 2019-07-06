// struct4.c
#include <stdio.h>

// \‘¢‘Ì‚ğéŒ¾
struct point {
  int x;
  int y;
};
//
struct line {
  struct point start;
  struct point end;
};
//
void print_point(struct point *p) {
  printf("point: x:%d, y:%d\n", p->x, p->y);
}

void print_line(struct line *l) {
  printf("line: (%d, %d) - (%d, %d)\n", l->start.x, l->start.y, l->end.x, l->end.y);
}
//
int main(void) {
  //
  struct point p;
  p.x = 100;
  p.y = 150;
  print_point(&p);
  //
  struct line l;
  l.start.x = 0;
  l.start.y = 10;
  l.end.x = 100;
  l.end.y = 150;
  print_line(&l);
  print_point(&l.start);

  return 0;
}
