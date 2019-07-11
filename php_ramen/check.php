
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>入力確認</title>
<style>
fieldset{
 width:500px;
 height:700px;
}
span{
 color:red;
}
</style>
</head>
<body>
<fieldset>
<legend>入力確認</legend>
<?php
 $tz = "Asia/Tokyo";
 date_default_timezone_set($tz);
?>
<?php
$myname=htmlspecialchars($_POST['myname'],ENT_QUOTES);
$gender=htmlspecialchars($_POST['gender'],ENT_QUOTES);
$age=$_POST['age'];
$post3=htmlspecialchars($_POST['post3'],ENT_QUOTES);
$post4=htmlspecialchars($_POST['post4'],ENT_QUOTES);
$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
$favorite=$_POST['favorit'];
$toppings=array();
 foreach($_POST['topping'] as $topping){
  $toppings[]=htmlspecialchars($topping,ENT_QUOTES);
 }
$note=htmlspecialchars($_POST['note'],ENT_QUOTES);
?>


<form action="#" method="post">

<dl>
 <dt>氏名：</dt>
 <dd>
 <?php
  print(''.$myname."<br>");
 ?>
 </dd>
 <dt>性別：</dt>
<dd>
<?php
 print(''.$gender."<br>");
?>
 </dd>
 <dt>年齢：</dt>
 <dd>
<?php
 print(''.$age."歳<br>");
0


?>

 </dd>

 <dt>郵便番号：</dt>
 <dd>
<?php
 print('〒'.$post3);
 print("ー");
 print($post4);
?>
 </dd>
 <dt>Eメールアドレス：</dt>
 <dd>
<?php
 print(''.$email."<br>");
?>
 </dd>
 <dt>一番好きなラーメン：</dt>
 <dd>
<?php
 print(''.$favorite."<br>");
?>




 </dd>

 <dt>お好きなトッピング（複数回答可）：</dt>
 <dd>
<?php
 foreach($toppings as $topping){
  print(''.$topping."<br>");
 }
?>
 </dd>

 <dt>ご意見・ご感想：</dt>
 <dd>
<?php
 print(''.htmlspecialchars($_POST['note'],ENT_QUOTES)."<br>");
?>
 </dd>
 <dt>選択して送信ボタンを押して下さい</dt>
 <dd>
  <input type="submit" value="確定">
  <input type="button" value="修正" onClick="history.back();">
 </dd>
</dl>
</form>

<p><hr>現在の時刻：
<?php
 print(date('Y年 n月 j日 '));
 print(date('G時 i分 s秒 '));
 print("(".$tz.")");
?>
</p><br><br>
</fieldset>
</body>
</html>















