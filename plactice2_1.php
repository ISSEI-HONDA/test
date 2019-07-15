
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Practice2_1</title>
<style>




span{
 color:blue;
}
</style>
</head>
<body>
<fieldset>
<legend>Practice2_1</legend>
<?php
 $tz = "Asia/Tokyo";
 date_default_timezone_set($tz);
?>
<span>※</span>は、青。
<p>桜の画像です。幅：320ピクセル、高さ：240ピクセルで表示させてみましょう。</p>


<p> <img src="images/sakura.jpg" width="320" height="240" alt="桜の映像"></p>

<p>二度目</p>


<p> <img src="images/sakura.jpg" width="640" height="480" alt="桜の映像2"></p>

<p>三度目</p>


<p> <img src="images/sakura.jpg" width="1280" height="960" alt="桜の映像3"></p>



<p><hr>current time :
<?php


 print(date('Y-n-j '));
 print(date('G:i:s '));
 print("(".$tz.")");
?>
</p><br><br>
</fieldset>
</body>
</html>
