//  limit.c
#include <stdio.h>
#include <limits.h>

int main(void) {
  //
  printf("%22s is %d Å` %d\n", "char", CHAR_MIN, CHAR_MAX);
  printf("%22s is %d Å` %d\n", "short", SHRT_MIN, SHRT_MAX);
  printf("%22s is %d Å` %d\n", "int", INT_MIN, INT_MAX);
  printf("%22s is %u Å` %u\n", "unsigned int", 0, UINT_MAX);
  printf("%22s is %ld Å` %ld\n", "long", LONG_MIN, LONG_MAX);
  printf("%22s is %lu Å` %lu\n", "unsigned long", 0, ULONG_MAX);
  printf("%22s is %lld Å` %lld\n", "long long", LLONG_MIN, LLONG_MAX);

  return 0;
}
