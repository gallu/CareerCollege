// func5.c
#include <stdio.h>

//
void func1(int ii) {
  ii ++;
  printf("ii is %d\n", ii);
}
void func2(char *ss) {
  ss[0] = 'A';
  printf("ss is %s\n", ss);
}
void func3(int *iii) {
  (*iii) ++;
  printf("iii is %d\n", *iii);
}

//
int main(void) {
  int i = 10;
  func1(i);
  printf("i is %d\n", i);
  func3(&i);
  printf("i is %d\n", i);
  //
  char s[] = "xyz";
  func2(s);
  printf("s is %s\n", s);

  return 0;
}
