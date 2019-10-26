// p_12.c
#include <stdio.h>

#define DOUBLE_ARRAY_NUM 5

int main() {
	double ad[DOUBLE_ARRAY_NUM] = {1.0, 2.0, 3.0, 4.0, 5.0};
	double* pad = ad;

	pad = ad;
	for(int i = 0; i < DOUBLE_ARRAY_NUM; i++) {
		printf("%p\t%f\n", pad, *pad);
		pad ++;
	}

	//
	return 0;
}
