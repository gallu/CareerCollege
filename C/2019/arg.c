// arg.c
// ex.  arg.exe  -a  /b
#include <stdio.h>

int main(int argc, char *argv[]) {
  //
  printf("argc is %d\n", argc);
  printf("atgv[0] is %s\n", argv[0]);
  if (2 <= argc) {
    printf("atgv[1] is %s\n", argv[1]);
  }
  if (3 <= argc) {
    printf("atgv[2] is %s\n", argv[2]);
  }

  return 0;
}
