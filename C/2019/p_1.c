// p_1.c
#include <stdio.h>

void hoge() {
	int i = 100;
	printf("%p\n", &i);
}

int main() {
	int i = 100;
	int j = 200;
	printf("%p\n", &i);
	printf("%p\n", &j);
	//
	hoge();

	return 0;
}
