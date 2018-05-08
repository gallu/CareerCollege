<?php
// form.php
?>
<h1>お問い合わせフォーム</h1>
<form action="./input.php" method="post">
お名前:<input name="name"><br>
連絡先(email):<input name="address"><br>
問い合わせ内容
<textarea name="body"></textarea><br>
<button type="submit">問い合わせる</button>
</form>
