// p_7.c
#include <stdio.h>

int main() {
	int ai[10] = {1,2,3,4,5,6,7,8,9,10};
	printf("%p\n", &ai[0]);
	printf("%p\n", ai);
	//
	int *pai;
	pai = &ai[0];
	printf("%p\n", pai);
	pai = ai;
	printf("%p\n", pai);

	char ac[10] = "abcdefghij";
	printf("%p\n", &ac[0]);
	printf("%p\n", ac);
	//
	char *pac;

	return 0;
}
