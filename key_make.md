# ペア鍵の作り方

授業中、しょっちゅうつかう「ペア鍵」の作り方です。

## ペア鍵を作る

- puttygenを立ち上げる
- 生成(Generate)をクリック
- Keyの枠内(window内)で適当にマウスを動かす

## 公開鍵を共有する

- public key(ssh-rasなどで始まる文字列)を、指定されたフォルダに、以下のフォーマットで保存する
  + ファイル名は「自分であることがわかる」程度に適当に：拡張子は.txt
  + 一行目は「自分のunixアカウント名」
  + 二行目に、ssh-から始まる公開鍵(最後は日付っぽい文字列で終わるので、ちゃんと最後まで)

## 秘密鍵を保存する

- passphraseを(２か所)入力する
- 「Save private key」ボタンで保存：保存先は、一旦デスクトップ
- デスクトップに保存した秘密鍵を、速やかに移動させる
  + あれば、手持ちのUSBメモリあたりがベスト
  + なければ、自分のGoogleドライブなどに保存する
  + いずれにしても「デスクトップに置きっぱなしには*絶対に*しないこと！！！！！」

## 参考

画像などが張り付けてあるので、以下のサイトを参照してみるのもよいでしょう。
ただ、操作などで細部に少し違いがあるので、あくまでも「参考」である、と認識してください。
主に「公開鍵の設置の仕方」「秘密鍵の保存場所」が大きく異なります。

https://www.tempest.jp/security/keygen.html
https://ja.osdn.net/projects/winscp/wiki/ui_puttygen
https://www.hulft.com/help/ja-jp/DataSpider/dss42/help/ja/servista/ssh_keygen.html
https://www.logw.jp/server/8427.html


