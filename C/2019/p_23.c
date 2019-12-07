// p_23.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
	int num = 5; // “®“I‚ÉŠm•Û‚µ‚½‚¢”z—ñ‚ÌŒÂ”
	int* pai;
	//
	//pai = calloc(num, sizeof(int));
	pai = malloc(num * sizeof(int));
	printf("%p\n", pai);
	if (NULL == pai) {
		return -1;
	}
	//
	for(int i = 0; i < num; i++) {
		pai[i] = 10; // XXX
		printf("%d: %d\n", i, pai[i]);
	}

	free(pai);
	pai = NULL;

	return 0;
}