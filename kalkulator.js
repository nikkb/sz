function pushButton(buttonValue)
{

if(buttonValue=='C')
{
	document.getElementById('ekran').value="";
}
else
{
	document.getElementById('ekran').value+=buttonValue;
}
}


function kalkulator(equation)
{
var wynik=eval(equation);

document.getElementById('ekran').value=wynik;
}