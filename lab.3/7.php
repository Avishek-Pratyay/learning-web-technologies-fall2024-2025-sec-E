<?php

function pattern($n)
{

for ($i = 0; $i < $n; $i++)
{

for($j = 0; $j <= $i; $j++ )
{

echo "* ";
}

echo "<br>";
}
}
$n = 3;
pattern($n);


//2nd shape:

function decreasing($n)
{

$num = 65;

for ($i = $n; $i >0; $i--)
{
for ($j = $n; $j <= $i; $j-- )
{
	
$ch = chr($num);
echo $ch." ";

$num = $num  1;
}

echo "<br>";
}
}
$n = 3;
decreasing($n);


//3rd shape:

function contalpha($n)
{

$num = 65;

for ($i = 0; $i < $n; $i++)
{
for ($j = 0; $j <= $i; $j++ )
{
	
$ch = chr($num);
echo $ch." ";

$num = $num + 1;
}

echo "<br>";
}
}
$n = 3;
contalpha($n);

?>

