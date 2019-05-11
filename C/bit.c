// bit.c
#include <stdio.h>

int main(void) {
  //int i = 0xff;
  int i = (0xffff + 1) * (0xffff);
  printf("%d\n", i);
  printf("%x\n", i);
  printf("%X\n", i);
  printf("%08x\n", i);

  // 
  int x = 0xf0; // 1111 0000
  int y = 0x3c; // 0011 1100
  printf("\t %x\n", x);
  printf("or \t %x\n", x | y);  // fc: 1111 1100
  printf("and \t %x\n", x & y); // 30: 0011 0000

  //
  int z = 1; // 0000 0001
  printf("<< 1 \t%d\n", z << 1); // 0000 0010
  printf("<< 2 \t%d\n", z << 2); // 0000 0100
  printf("<< 3 \t%d\n", z << 3); // 0000 1000
  //
  z = 16; // 0001 0000
  printf(">> 1 \t%d\n", z >> 1); // 0000 1000
  printf(">> 2 \t%d\n", z >> 2); // 0000 0100
  printf(">> 3 \t%d\n", z >> 3); // 0000 0010


  return 0;
}
