// p_06_pre.c
#include <stdio.h>
#include <stdlib.h>

int main() {
	char *ps;
	ps = malloc( 4 * sizeof(char) );
	if (NULL == ps) {
		return -1;
	}
	memcpy(ps, "abc", 4);

	//
	char *ps2;
	ps2 = realloc(ps, 7 * sizeof(char) );
	if (NULL == ps2) {
		free(ps);
		ps = NULL;
		return -1;
	}
	memcpy(&ps2[3], "def", 4);
	//
	printf("%s\n", ps2);

	//
	free(ps2);
	ps2 = NULL;

	return 0;
}
