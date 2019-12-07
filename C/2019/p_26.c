// p_26.c
#include <stdio.h>

int main() {
	int i = 100;
	int* pi = &i;
	int** ppi = &pi;
	int*** pppi = &ppi;

	int j = 101;
	int* pj = &j;

	printf("%p\n", &i);
	printf("%p\n", pi);
	printf("%p\n", ppi);
	printf("%p\n", pppi);

	return 0;
}
