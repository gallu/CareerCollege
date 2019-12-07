// p_18.c
#include <stdio.h>

// \‘¢‘Ì‚ğéŒ¾
typedef struct {
  int x;
  int y;
} POINT;

POINT hoge(void) {
  POINT point;
  point.x = 111;
  point.y = 222;
  printf("%p\n", &point);
  //
  return point;
}

POINT* foo(void) {
  POINT point;
  point.x = 111;
  point.y = 222;
  printf("%p\n", &point);
  //
  return &point;
}

int main() {
  //
  POINT point = hoge();
  printf("%p\n", &point);
  printf("%d, %d\n", point.x, point.y);
  //
  POINT* pp = foo();
  printf("%p\n", pp);
  printf("%d, %d\n", pp->x, pp->y);
  //
  return 0;
}


