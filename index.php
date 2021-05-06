<!DOCTYPE html>
<html>
<head>
	<title>MSeymenD TXT Buton</title>
</head>
<body>
<h1>MSeymenD</h1>
<?php
$txtoku = fopen("veri.txt", "r") or exit("Dosya Açılamadı !");
 
while(!feof($txtoku))
{
	echo '<a  href="#"><button style="width: 60px; ">'.fgets($txtoku).'</button></a><br>';
}
 
fclose($txtoku);
?>
</body>
</html>
