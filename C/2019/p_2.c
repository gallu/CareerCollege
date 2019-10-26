// p_2.c
#include <stdio.h>

void hoge(int i) {
	printf("%p\n", &i);
}

int main() {
	int i = 100;
	printf("%p\n", &i);
	hoge(i);

	return 0;
}
