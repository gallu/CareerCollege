// struct2.c
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

int main(void) {
  //
  struct line l;
  l.start.x = 0;
  l.start.y = 10;
  l.end.x = 100;
  l.end.y = 150;

  printf("(%d, %d) - (%d, %d)\n", l.start.x, l.start.y, l.end.x, l.end.y);

  return 0;
}
