// p_5.c
#include <stdio.h>

int main() {
	int i;
	int *pi = &i;
	float f;
	float *pf = &f;
	double d;
	double *pd = &d;
	char c;
	char *pc = &c;
	//
	printf("int\t%p\n", &i);
	printf("float\t%p\n", &f);
	printf("float\t%p\n", pf);
	printf("double\t%p\n", &d);
	printf("double\t%p\n", pd);
	printf("char\t%p\n", &c);
	printf("char\t%p\n", pc);
	//
	return 0;
}
