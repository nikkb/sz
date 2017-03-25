function dodawanie(){
var a=document.getElementById("pierwsza").value;

var b=document.getElementById("druga").value;

var suma;

if(a=='' || b=='')
{
suma="Proszę uzupełnić obie liczby.";
document.getElementById("wynik").innerHTML=(suma);
}
else
{
a/=1;
b/=1;
suma/=1;
suma=a+b;

document.getElementById("wynik").innerHTML=("Wynik działania wynosi: "+suma);
}
}



function odejmowanie(){
var a=document.getElementById("pierwsza").value;

var b=document.getElementById("druga").value;

var roznica;

if(a=='' || b=='')
{
roznica="Proszę uzupełnić obie liczby.";
document.getElementById("wynik").innerHTML=(roznica);
}
else
{
a/=1;
b/=1;
roznica/=1;
roznica=a-b;
document.getElementById("wynik").innerHTML=("Wynik działania wynosi: "+roznica);
}
}



function mnozenie(){
var a=document.getElementById("pierwsza").value;
var b=document.getElementById("druga").value;
var iloczyn;
if(a=='' || b=='')
{
iloczyn="Proszę uzupełnić obie liczby.";
document.getElementById("wynik").innerHTML=(iloczyn);
}
else
{
iloczyn/=1;
iloczyn=a*b;
document.getElementById("wynik").innerHTML=("Wynik działania wynosi: "+iloczyn);
}
}



function dzielenie(){
var a=document.getElementById("pierwsza").value;
var b=document.getElementById("druga").value;

var iloraz;
if(a=='' || b=='')
{
iloraz="Proszę uzupełnić obie liczby.";

document.getElementById("wynik").innerHTML=(iloraz);
}
else
if(b==0)
{
iloraz="Nie wolno dzielić przez zero.";

document.getElementById("wynik").innerHTML=(iloraz);
}
else
{
iloraz/=1;
iloraz=a/b;

document.getElementById("wynik").innerHTML=("Wynik działania wynosi: "+iloraz);
}
}