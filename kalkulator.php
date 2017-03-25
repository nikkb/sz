<html>
<head>
<link rel="stylesheet" type="text/css" href="kalkulator.css">
<script type="text/javascript" src="kalkulator.js"></script>
</head>
<body><center>
<div id="baner">

<br>
<a href="index.html">Strona główna</a>

<a href="kalkulator.php">Kalkulator</a>
<a href="linki.html">Ciekawe linki</a>
<!--<a href="index.html"><img src="baner.jpg"></a>-->
</div></center>
<table cellpadding="4" class="przycisk1">
<tr>
<td colspan="4"><input class="przycisk1" id="ekran" type="text"></input></td>
</tr>
<tr>
<td><input type="button" class="przycisk1" value=1 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=2 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=3 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value='/' onclick="pushButton(this.value)"></input></td>
</tr>
<tr>
<td><input type="button" class="przycisk1" value=4 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=5 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=6 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value='*' onclick="pushButton(this.value)"></input></td>
</tr>
<tr>
<td><input type="button" class="przycisk1" value=7 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=8 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value=9 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value='-' onclick="pushButton(this.value)"></input></td>
</tr>
<tr>
<td><input type="button" class="przycisk1" value=0 onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value='.' onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="usun" value='C' onclick="pushButton(this.value)"></input></td>
<td><input type="button" class="przycisk1" value='+' onclick="pushButton(this.value)"></input></td>
</tr>
<tr>
<td colspan="4"><input type="button" class="rowny" onclick="kalkulator(document.getElementById('ekran').value)" size="5" value='='></input>
</td>
</tr>
</table>
</body> 
</html>