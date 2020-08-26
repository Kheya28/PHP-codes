<?php

echo "<title> Weather </title>";
echo "<h1> Weather </h1>";
$arr= array("rain", "sunshine", "clouds"," hail", "sleet", "snow", "wind" );

for ($i = 0; $i < count($arr); $i++) {
	echo "$arr[$i] <br>";
} 
?>