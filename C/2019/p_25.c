// p_25.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main() {
	int num = 5; // 動的に確保したい配列の個数
	int* pai;
	//
	pai = malloc(num * sizeof(int));
	printf("%p\n", pai);
	if (NULL == pai) {
		return -1;
	}
	// 数を増やしたい
	num = 10;
	int* pai2;
	pai2 = realloc(pai, num * sizeof(int)); // XXX paiで受けない事！！
	if (NULL == pai2) {
		free(pai);
		pai = NULL;
		return -1;
	}
	//
	for(int i = 0; i < num; i++) {
		pai2[i] = 10; // XXX
		printf("%d: %d\n", i, pai2[i]);
	}
	free(pai2);
	pai2 = NULL;
	//
	return 0;
}
