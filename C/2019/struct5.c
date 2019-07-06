// struct5.c
#include <stdio.h>

#define ITEM_NAME_LENGTH 20
//
struct item {
  char name[ ITEM_NAME_LENGTH ];
  int price;
};

void print_item(struct item i) {
    printf("name: %s\nprice: %d\n", i.name, i.price);
}

int main(void) {
  //
  struct item i;
  //
  i.price = 2000;
  strncpy(i.name, "book", ITEM_NAME_LENGTH - 1);
  i.name[ITEM_NAME_LENGTH - 1] = '\0'; // à¿ëSçÙ
  //
  print_item(i);

  return 0;
}
