<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="ключевые слова">
<meta name="description" content="описание сайта">
<link href="calk.css"  rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Калькулятор</title>
</head>
<body class="body">
<div class="form">
<form method="post" action="">
<h4>калькулятор</h4>
Введите первое число-  <input class="re" type="text" name="num1"><br><br>
<Label>минус<input type="radio" name="task" value="+">
<Label>плюс<input type="radio" name="task" value="-">
<Label>разделить<input type="radio" name="task" value="/">
<Label>умножить<input type="radio" name="task" value="*"><br><br>
Введите второе число-  <input class="re2"type="text" name="num2"><br><br>
<input type="submit" name="action" value="обчислить"><br><br>
Результат - 
</form>
</body>

<?php

$x = $_POST['num1'];
$y = $_POST['num2'];
$rez = $_POST['task'];
if (isset ($_POST['num1'] , $_POST['num2'])){
$a = $x - $y;
$b = $x + $y;
@$c = $x / $y;
$d = $x * $y;
}

	if ($rez == '+'){
    echo $a ;}
     elseif ($rez == '-'){
	 echo $b ;}
	 elseif ($rez == '/'){
	 echo $c;}
	 elseif($rez == '*'){
	 echo $d ;}


	
	
	
	
	






?>
</div>



