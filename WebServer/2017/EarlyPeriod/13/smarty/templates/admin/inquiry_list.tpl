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

<h2>検索</h2>
<form action="./inquiry_list.php" method="GET">
<input type="hidden" name="sort" value="{$sort}">
name(あいまい)<input name="name" value="{$find_string.name}"><br>
email<input name="email" value="{$find_string.email}"><br>
誕生日<input name="birthday_from" value="{$find_string.birthday_from}">
      ～<input name="birthday_to" value="{$find_string.birthday_to}"><br>
<button>検索</button>
</form>

<h2>一覧</h2>
{if $back_page_flg == true}
  <a href="./inquiry_list.php?sort={$sort}&{$uri_params|unescape}&p={$back_page}" class="btn btn-nomal"> back </a>
{else}
  　　　　
{/if}
{if $next_page_flg == true}
  <a href="./inquiry_list.php?sort={$sort}&{$uri_params|unescape}&p={$next_page}" class="btn btn-nomal"> next </a><br>
{else}
  　　　　
{/if}

<table class="table table-hover">
<tr>
  <th>ID<a href="./inquiry_list.php?sort=id&{$uri_params|unescape}">▲</a>
    <a href="./inquiry_list.php?sort=id_desc&{$uri_params|unescape}">▼</a>
  <th>名前<a href="">▲</a><a href="">▼</a>
  <th>email<a href="">▲</a><a href="">▼</a>
  <th>問い合わせ内容
  <th>返信日時<a href="./inquiry_list.php?sort=response_date&{$uri_params|unescape}">▲</a>
    <a href="./inquiry_list.php?sort=response_date_desc&{$uri_params|unescape}">▼</a>
  <th>
{foreach from=$inquiry_list item=i}
  <tr>
    <td>{$i.inquiry_id}
    <td>{$i.name}
    <td>{$i.email}
    <td>{$i.inquiry_body}
    <td>{$i.response_date}
    <td><a href="./inquiry_detail.php?inquiry_id={$i.inquiry_id|urlencode}" class="btn btn-nomal">問い合わせ詳細</a>
{/foreach}
</table>

<hr>
<a href="./top.php">Topに戻る</a>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>
</bod>
</html>
