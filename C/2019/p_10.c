// p_10.c
#include <stdio.h>

int main() {
	char ac[] = "abcdef";

	//
	int len = strlen(ac);
	for(int i = 0; i < len; i++) {
		printf("%c\n", ac[i]);
	}
	printf("\n\n");

	//
	char* pac = ac;
	while(*pac != '\0') {
		printf("%c\n", *pac);
		pac ++;
	}

	return 0;
}
