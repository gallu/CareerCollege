// p_16.c
#include <stdio.h>

// \‘¢‘Ì‚ðéŒ¾
typedef struct {
  int x;
  int y;
} POINT;

int main() {
  //
  POINT point;
  POINT* pp = &point;
  //
  (*pp).x = 100;
  (*pp).y = 200;
  printf("%d, %d\n", point.x, point.y);
  //
  pp->x = 111;
  pp->y = 222;
  printf("%d, %d\n", point.x, point.y);



  //
  return 0;
}


