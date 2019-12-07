// p_21.c
#include <stdio.h>
#include <stdlib.h>

int main() {
	char *s;
	printf("%p\n", s); // warning C4700: 初期化されていないローカル変数 's' が使用されます

	s = malloc(128);
	printf("%p\n", s);

	//
	free(s);
	s = NULL; // 解放したらすぐにNULLを入れるようにする(事故防止)

	return 0;
}


