// p_28.cpp
#include <iostream>
#include <string>

// インスタンスがcopyされるからめちゃくちゃメモリを食う
void func1(std::string s) {
	// 処理
}
// でも「func2の中でsの中身を書き換えてほしくない………」
void func2(std::string &s) {
	// 処理
	s = s + "abc"; // できちゃうけど困る………
}
//
void func3(const std::string &s) {
	// 処理
	//s = s + "abc"; // やったらコンパイルで怒られる！！
}

int main() {
	std::string s = "abc"; // 100kバイトくらいの長さだと思いねぇ
	func1(s);
	func2(s);
	func3(s);
}