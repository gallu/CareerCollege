// p_3.c
#include <stdio.h>

int main() {
	int i = 100;
	int* pi = &i;
	printf("%p\n", &i);
	printf("%p\n", pi);
	//
	printf("%d\n", i);
	i = 200;
	printf("%d\n", i);
	printf("%d\n", *pi);
	*pi = 999;
	printf("%d\n", i);

	return 0;
}
