//  func.c
//  cl  func.c
#include <stdio.h>

// add
int add(int i, int j);
int add(int i, int j) {
    int total;
    total = i + j;

    return total;
}

int main() {
     int i;
     i = add(123, 456);
     printf("%d \n", i);

     return 0;
}


