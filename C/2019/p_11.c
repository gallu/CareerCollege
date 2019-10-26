// p_11.c
#include <stdio.h>

#define INT_ARRAY_NUM 5

int main() {
	int ai[INT_ARRAY_NUM] = {1,2,3,4,5};
	int* pai = ai;

	//
	printf("%p\t%d\n", pai, *pai);
	//
	pai ++;
	//pai += 4; // �ԈႢ
	printf("%p\t%d\n", pai, *pai);
	printf("\n\n");

	pai = ai;
	for(int i = 0; i < INT_ARRAY_NUM; i++) {
		printf("%p\t%d\n", pai, *pai);
		pai ++;
	}

	//
	return 0;
}
