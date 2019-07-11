
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ラーメン店アンケート</title>
<style>
fieldset{
 width:450px;
 height:750px;
}
span{
 color:red;
}
</style>
</head>
<body>
<?php
 $tz = "Asia/Tokyo";
 date_default_timezone_set($tz);
?>
<h2>
ラーメン店アンケート
</h2>


<form action="receive.php" method="post">

 <p>氏名※：<br>

  <input type="text" name="myname" id="myname" size="35 maxlength="255" value="" placeholder="全角10文字まで">
 </p> 


 <p>性別：<br>
  <input type="radio" name="gender" id="gender_male" value="男"><label for="gender_male">男性</label>
  <input type="radio" name="gender" id="gender_female" value="女"><label for="gender_female">女性</label>
 </p> 


 <p>年齢：<br>
  <select name="age" id="age">
<?php
 for($i=5; $i<60; $i++){
  print('<option value="'.$i.'">'.$i.'</option>');
 }
?>
  </select>
 </p> 

 <p>郵便番号：<br>〒

  <input type="text" name="post3" id="post3" size="3 maxlength="3" value="" placeholder="3桁">
―
  <input type="text" name="post4" id="post4" size="4 maxlength="4" value="" placeholder="4桁">
 </p> 

 <p>Eメールアドレス※：<br>

  <input type="text" name="email" id="email" size="50 maxlength="255" value="" placeholder="半角で入力してください">
 </p> 


 <p>一番好きなラーメン：<br>
  <select name="favorit" id="favorit">
   <option value=醤油ラーメン">醤油ラーメン</option>
   <option value=豚骨ラーメン">豚骨ラーメン</option>
   <option value=塩ラーメン">塩ラーメン</option>
   <option value=味噌ラーメン">味噌ラーメン</option>
 
  </select>
 </p> 


 <p>お好きなトッピング（複数回答可）：<br>
  <input type="checkbox" name="topping[]" id="menma" value="menma"><label for="menma">メンマ</label>
  <input type="checkbox" name="topping[]" id="chyasyu" value="chyasyu"><label for="chyasyu">チャーシュー</label>
  <input type="checkbox" name="topping[]" id="yakkinori" value="yakkinori"><label for="yakkinori">焼きのり</label>
  <input type="checkbox" name="topping[]" id="nitamago" value="nitamago"><label for="nitamago">煮玉子</label>
  <input type="checkbox" name="topping[]" id="negi" value="negi"><label for="negi">ネギ</label>
 </p>ご興味のあるカテゴリー（ここまで）

 <p>ご意見・ご感想：<br>

  <textarea name="note" id="note" rows="5" cols="100" placeholder="ご自由にお書き下さい"></textarea>

 </p> 


 <p>選択して送信ボタンを押して下さい</br>
  <input type="submit" value="送信">
  <input type="submit" value="取消">
 </p>　

</form>

<p><hr>現在の時刻：
<?php
 print(date('Y年 n月 j日 '));
 print(date('G時 i分 s秒 '));
 print("(".$tz.")");
?>
</p><br><br>
</body>
</html>















