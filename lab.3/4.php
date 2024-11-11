<?php
 echo "Number1 is = ". $number1=25 . "<br>";
 echo "Number2 is =". $number2=70 . "<br>";
 echo "Number3 is =". $number3=55 . "<br>";

 if($number1>$number2)
 {
    if($number1>$number3)

    {
        echo "Largest Number is =".$number1;
    }
 }
 elseif($number2>$number3)
 {
    echo "Largest Number is =".$number2;
 }
 else
 echo "Largest Number is =".$number3;

?>