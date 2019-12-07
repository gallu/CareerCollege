// p_33.c
/*
class hoge {
  public function test() {
    printf("%d\n", $this->i);
  }
  public function set_i($i) {
    $this->i = $i;
  }

private $i;
}
 */
struct hoge {
  void (*test)(struct hoge *);
  void (*set_i)(struct hoge *, int);
  int i;
} ;

void test(hoge* h) {
  printf("%d\n", h->i);
}
void set_i(hoge* h, int i) {
  h->i = i;
}

struct hoge* hoge_new() {
  struct hoge* h;
  h = malloc( sizeof(struct hoge) );
  h->test = test;
  h->set_i = set_i;
  //
  return h;
}

int main() {
  //
  hoge* h = hoge_new();
  h->set_i(10);
  h->test();

}

