/*Evgen8*/
#include <stdbool.h>

bool isDivisible(int n, int x, int y) {
  return n%x == 0 && n%y == 0 ? 1 : 0;
}
