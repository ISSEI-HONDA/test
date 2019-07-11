
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>
<style>
fieldset{
 width:500px;
 height:900px;
}
span{
 color:red;
}
</style>
</head>
<body>
<fieldset>
<legend>アンケート</legend>
<?php
 $tz = "Asia/Tokyo";
 date_default_timezone_set($tz);
?>



<span>※</span>は、必須項目です。

<form action="check.php" method="post">

<dl>
 <dt>氏名<span>※</span>：</dt>
 <dd>
  <input type="text" name="myname" id="myname" size="35 maxlength="255" value="" placeholder="全角10文字まで">
 </dd><br>


 <dt>性別：</dt>
<dd>
  <input type="radio" name="gender" id="gender_male" value="男"><label for="gender_male">男性</label>
  <input type="radio" name="gender" id="gender_female" value="女"><label for="gender_female">女性</label>
 </dd><br>

 <dt>年齢：</dt>
 <dd>
  <select name="age" id="age">
<?php
 for($i=5; $i<60; $i++){
  print('<option value="'.$i.'">'.$i.'</option>');
 }
?>
  </select>
 </dd><br>

 <dt>郵便番号：〒</dt>
 <dd>
  <input type="text" name="post3" id="post3" size="3 maxlength="3" value="" placeholder="3桁">
―
  <input type="text" name="post4" id="post4" size="4 maxlength="4" value="" placeholder="4桁">
 </dd><br>


 <dt>Eメールアドレス<span>※</span>：</dt>
 <dd>
  <input type="text" name="email" id="email" size="50 maxlength="255" value="" placeholder="半角で入力してください">
 </dd><br>


 <dt>一番好きなラーメン：</dt>
 <dd>
  <select name="favorit" id="favorit">
   <option value="醤油ラーメン">醤油ラーメン</option>
   <option value="豚骨ラーメン">豚骨ラーメン</option>
   <option value="塩ラーメン">塩ラーメン</option>
   <option value="味噌ラーメン">味噌ラーメン</option>
 
  </select>
 </dd><br>

 <dt>お好きなトッピング（複数回答可）：</dt>
 <dd>
  <input type="checkbox" name="topping[]" id="menma" value="メンマ"><label for="menma">メンマ</label>
  <input type="checkbox" name="topping[]" id="chyasyu" value="チャーシュー"><label for="chyasyu">チャーシュー</label>
  <input type="checkbox" name="topping[]" id="yakkinori" value="焼きのり"><label for="yakkinori">焼きのり</label>
  <input type="checkbox" name="topping[]" id="nitamago" value="煮玉子"><label for="nitamago">煮玉子</label>
  <input type="checkbox" name="topping[]" id="negi" value="ネギ"><label for="negi">ネギ</label>
 </dd><br>

 <dt>ご意見・ご感想：</dt>
 <dd>
  <textarea name="note" id="note" rows="5" cols="50" placeholder="ご自由にお書き下さい"></textarea>

 </dd><br>

 <dt>選択して送信ボタンを押して下さい</dt>
 <dd>
  <input type="submit" value="送信">
  <input type="submit" value="取消">
 </dd><br>
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















