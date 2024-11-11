<?php

$array = array(25,67,98,60,55,787,637637,771,876,2123,536536);

$element = 675656466;

$found = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $element)
	{
        $found = true;
        break;
    }
}

if ($found)
	{
    echo "Element found ";
    }
 else 
    {
    echo "Element not found ";
    }
?>