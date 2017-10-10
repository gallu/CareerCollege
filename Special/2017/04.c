#include <stdio.h>


//
void hoge(int i) {
  printf("in hoge %d\n", i);
}
void foo(int i) {
  printf("in foo %d\n", i);
}

int main() {
  //
  void (*p_func_hoge)(int) = hoge;
  void (*p_func_foo )(int) = foo ;
  //
  //p_func_hoge(10);
  //(*p_func_hoge)(20);
  printf("p_func_hoge: %016x\n", p_func_hoge);
  //
  //p_func_foo(10);
  //(*p_func_foo)(20);
  printf("p_func_foo : %016x\n", p_func_foo );
  //

  //
  return 0;
}
