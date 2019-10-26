// p_13.c
#include <stdio.h>

#define INT_ARRAY_NUM 5

void hoge(int* pai, int num) {
	//
	for(int i = 0; i < num; i++) {
		printf("%p\t%d\n", pai, *pai);
		pai ++;
	}
}

int main() {
	int ai[INT_ARRAY_NUM] = {1,2,3,4,5};
	printf("\t%p\n", ai); // 呼び元のポインタの表示

	hoge(ai, INT_ARRAY_NUM);

	//
	return 0;
}
