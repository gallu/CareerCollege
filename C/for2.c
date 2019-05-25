// for2.c
#include <stdio.h>

int main(void) {
  // 普通のfor文
  for(int i = 0; i < 10; i++) {
    printf("普通の %d\n", i);
  }
  printf("\n");

  // forの「最後のブロック」は、ループの最後に処理される
  for(int i = 0; i < 10; ) {
    printf("最後を外した %d\n", i);

    // 「forの最後」の処理
    // XXX 厳密には「continueの時」に動きが違うが、イメージとして
    i++;
  }
  printf("\n");

  // forの「真ん中のブロック」は、ループの最初に処理される
  for(int i = 0; ; ) {
    // 「forの真ん中」の処理
    if ( !(i < 10) ) {
      break;
    }

    printf("真ん中を外した %d\n", i);

    // 「forの最後」の処理
    i++;
  }
  printf("\n");

  // forの「最初のブロック」は、ループの上で処理される
  int i = 0;
  for( ; ; ) {
    // 「forの真ん中」の処理
    if ( !(i < 10) ) {
      break;
    }

    printf("最初を外した %d\n", i);

    // 「forの最後」の処理
    i++;
  }
  printf("\n");

  // 「慣れている人」の、上述のforの書き方
  i = 0;
  for( ; ; ) {
    // 「forの真ん中」の処理
    if ( !(i < 10) ) {
      break;
    }

    printf("少しテクニカル %d\n", i++); // 
  }
  printf("\n");



  return 0;
}
