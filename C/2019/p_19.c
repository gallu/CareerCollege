// p_19.c
#include <stdio.h>

typedef struct {
  int x;
  int y;
} POINT;
//
typedef struct {
  POINT start;
  POINT end;
} LINE;
//
void hoge(LINE* ll) {
  ll->start.x = 10;
  ll->start.y = 20;
  //
  ll->end.x = 111;
  ll->end.y = 222;
}
//
int main() {
  //
  LINE line;
  hoge(&line);
  printf("line: (%d, %d) - (%d, %d)\n", line.start.x, line.start.y, line.end.x, line.end.y);

  return 0;
}


