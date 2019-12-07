// p_20.c
/*
構造体
	int a
	int b
	int c
---
・関数 hoge() の中でa b cにそれぞれ「０～１００」の数字を入れる
・main関数側で、入った値を表示する
 */
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

// 構造体
typedef struct {
	int a;
	int b;
	int c;
} TEST;

//
void hoge(TEST *t) {
	// a b cにそれぞれ「０～１００」の数字を入れる
	t->a = rand() % 101;
	t->b = rand() % 101;
	t->c = rand() % 101;
}

int main() {
	// 一度だけ
	srand((unsigned int)time(NULL));
	//
	TEST test;
 	hoge(&test);

	// main関数側で、入った値を表示する
	printf("%d, %d, %d \n", test.a, test.b, test.c);

	//
	return 0;
}
