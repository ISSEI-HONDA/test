
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Practice1</title>
<style>
fieldset{
 width:500px;
 height:900px;
}
span{
 color:blue;
}
</style>
</head>
<body>
<fieldset>
<legend>Practice1</legend>
<?php
 $tz = "Asia/Tokyo";
 date_default_timezone_set($tz);
?>
<span>※</span>は、青。
<h1>h1タグの表示</h1>
<h2>h2タグの表示</h2>
<h3>h3タグの表示</h3>
<h4>h4タグの表示</h4>
<h5>h5タグの表示</h5>
<h6>h6タグの表示</h6>
<p>段落の表示</p>
<p>HTML内で改行しても、
  ブラウザ上では改行されません。</p>
<p>改行したいときは<br>
brタグを使います。<br></p>
<p?水辺線も引けます</p>
<hr>
<p><strong>strongタグの表示</strong>
  <em>emタグの表示</em> </p>
</fieldset>
<p><hr>現在の時刻：
<?php
 print(date('Y年 n月 j日 '));
 print(date('G時 i分 s秒 '));
 print("(".$tz.")");
?>
</p><br><br>
</body>
</html>
