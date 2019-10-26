// p_4.c
#include <stdio.h>

void hoge(int* pi) {
	printf("hoge\t%p: %d\n", pi, *pi);
	*pi = 999;
	printf("hoge\t%p: %d\n", pi, *pi);
}

int main() {
	int i = 100;
	int* pi = &i;
	//
	printf("\t%p: %d\n", pi, i);
	hoge(pi);
	printf("\t%p: %d\n", pi, i);

	return 0;
}
