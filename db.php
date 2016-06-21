<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="ключевые слова">
<meta name="description" content="описание сайта">
<link href="style.css"  rel="stylesheet" type="text/css">
<title>сайт</title>

</head>
<body>

<?php
 require_once 'alfa-bd.php';
$result = mysql_query("SELECT * FROM foo ORDER BY id DESC LIMIT 3 ");
while($row = mysql_fetch_array($result))

{?>
	<h2><?php echo $row['title']?></h2>
	<p><?php echo $row['text']?></p>
	<p>Автор:<?php echo $row['avtor']?></p>
	
<?php }

 ?>
 </body>
   