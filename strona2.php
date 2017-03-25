<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="dzialania.js"></script>
</head>
<body>
<div id="strona">

<div id="baner">
<a href="index.html"><img src="baner.jpg"></a>
</div>

<div id="tresc">

<h1>
<b>POTĘGOWANIE</b>
</h1>

<i>
<form action="strona2.php" method="GET">
Podaj podstawę potęgi:
<input type="text" name="podstawa">
<br><br>
Podaj dodatni, całkowity wykładnik potęgi:
<input type="text" name="wykladnik"><br><br>
<input type="submit" value="POTĘGOWANIE">
</form>
<?php
if(isset($_GET['podstawa']) and isset($_GET['wykladnik']))
{

$a=$_GET['podstawa'];
$b=$_GET['wykladnik'];
$wynik=1;
if($a=='' || $b=='')
{
echo("Wpisz podstawę i wykładnik potęgi.");
}
elseif($b<0)
{
echo("Wykładnik potęgi musi być dodatni.");

}
elseif($b==0)
{
echo("Wynik działania wynosi: ".$wynik);
}

else
{
for($i=0;$i<$b;$i++)
{
$wynik*=$a;

}
echo("Wynik działania wynosi: ".$wynik);
}


}
?>
</i>

</div>


<div id="menu">
<br>
Menu<br>
<li>
<a href="strona1.html">proste działania</a>
</li>
<li>
<a href="strona2.php">potęgowanie</a>
</li>
</div>


</div>



</body>
</html>