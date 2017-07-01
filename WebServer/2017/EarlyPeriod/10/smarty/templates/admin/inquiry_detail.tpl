{* inquiry_detail.tpl *}
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div class="container">
{* $inquiry_data|var_dump *}
<table class="table">
<tr>
  <td>id
  <td>{$inquiry_data.inquiry_id}
<tr>
  <td>email
  <td>{$inquiry_data.email}
<tr>
  <td>name
  <td>{$inquiry_data.name}
<tr>
  <td>birthday
  <td>{$inquiry_data.birthday}
<tr>
  <td>body
  <td><pre>{$inquiry_data.inquiry_body}</pre>
</table>
<h2>未実装</h2>
<ul>
  <li>「返信をmailする」機能
  <li>返信のステータス表示
</ul>

<hr>
<a href="./top.php">Topに戻る</a>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

