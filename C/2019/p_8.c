// p_8.c
#include <stdio.h>

int main() {
	char ac[] = "abcdef";
	char* pac = ac;

	//
	printf("%p\t%c(%c)\n", pac, *pac, ac[0]);
	//
	pac ++;
	printf("%p\t%c(%c)\n", pac, *pac, ac[1]);
	pac ++;
	printf("%p\t%c(%c)\n", pac, *pac, ac[2]);

	return 0;
}
