<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Софтуерни продукти</title>
  </head>
  <body>

<h1>Продажба на софтуерни продикти</h1>
<?php 
$klient=$_REQUEST["klient"];


$s = 0;
$broi = 0;


echo "Въведеното име е " . $klient;

if(!empty($_REQUEST["sklad"])){
  $s += 100;
  $broi++;
  echo "<p>Закупен е склад за 100 лева.</p>";
}
if(!empty($_REQUEST["schetovodstvo"])){
  $s += 200;
  $broi++;
  echo "<p>Закупено е счетоводство за 200 лева.</p>";
}
if(!empty($_REQUEST["plasment"])){
  $s += 250;
  $broi++;
  echo "<p>Закупен е пластмент за 100 лева.</p>";
}

if ($broi>1) {
  $s= 0.9* $s;
  
}
echo "<p> Сумата за плащане е " . $s . " лева.";;
?>




</body>
</html>
