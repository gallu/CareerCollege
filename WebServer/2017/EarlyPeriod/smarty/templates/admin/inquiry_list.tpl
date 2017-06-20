{* inquiry_list.tpl *}
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
<div class="container">

<h1>問い合わせ一覧</h1>
{* $inquiry_list|var_dump *}

検索：<br>
name<br>
email<br>
<br>

<table class="table table-hover">
<tr>
  <th>ID
  <th>問い合わせ内容
{foreach from=$inquiry_list item=i}
  <tr>
    <td>{$i.inquiry_id}
    <td>{$i.inquiry_body}
    <td><a href="" class="btn btn-nomal">問い合わせ詳細</a>
{/foreach}
</table>

<hr>
<a href="./top.php">Topに戻る</a>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>
</bod>
</html>
