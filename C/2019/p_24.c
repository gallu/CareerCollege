// p_24.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct {
	int x;
	int y;
} POINT;

int main() {
	POINT* p;
	p = malloc( sizeof(POINT) );
	printf("%d, %p\n", sizeof(POINT), p);
	if (NULL == p) {
		return -1;
	}
	//
	p->x = 100;
	p->y = 200;
	printf("%d, %d\n", p->x, p->y);

	return 0;
}

