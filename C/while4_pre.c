// while4_pre.c
#include <stdio.h>
#include <ctype.h>

int main(void) {
  //
  int c;
  c = getchar();
  //
  if (isupper(c)) {
    printf("“ü—Í‚³‚ê‚½•¶š(%c)‚Í‘å•¶š‚Å‚·\n", c);
  } else if (islower(c)) {
    printf("“ü—Í‚³‚ê‚½•¶š(%c)‚Í¬•¶š‚Å‚·\n", c);
  } else {
    printf("“ü—Í‚³‚ê‚½•¶š(%c)‚Í‘å•¶š‚Å‚à¬•¶š‚Å‚à‚ ‚è‚Ü‚¹‚ñ\n", c);
  }

  return 0;
}
