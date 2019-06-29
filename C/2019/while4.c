// while4.c
// コンパイル：cl  while4.c
// 実行：while4.exe < while4.txt
#include <stdio.h>
#include <ctype.h>

int main(void) {
  //
  int c;
  // 文字の終わり(EOF)までループ
  while((c = getchar()) != EOF){
    /*
    // 文字が「大文字」なら
    if (isupper(c)) {
      c = tolower(c); // 小文字に変換
    }
    */
    // 文字が「小文字」なら
    if (islower(c)) {
      c = toupper(c); // 大文字に変換
    }
    // 出力
    putchar(c);
  }

  return 0;
}
