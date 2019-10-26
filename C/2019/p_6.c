// p_6.c
#include <stdio.h>

int main() {
	int ai[10] = {1,2,3,4,5,6,7,8,9,10};
	printf("%p\t%d\n", &ai[0], ai[0]);
	printf("%p\t%d\n", &ai[1], ai[1]);
	printf("%p\t%d\n", &ai[2], ai[2]);
	printf("%p\t%d\n", &ai[9], ai[9]);

	char ac[10] = "abcdefghij"; // XXX
	printf("%p\t%c\n", &ac[0], ac[0]);
	printf("%p\t%c\n", &ac[1], ac[1]);
	printf("%p\t%c\n", &ac[2], ac[2]);


	return 0;
}
