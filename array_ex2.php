<?php

echo "<title> Weather </title>";
echo "<h1> Weather </h1>";
$arr= array("Tokyo","Mexico City", "New York City"," Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires"," Cairo", "London");

for ($i = 0; $i < count($arr); $i++) {
	echo "$arr[$i] <br>";
} 

sort($arr);

for ($i = 0; $i < count($arr); $i++) {
	echo "<li>$arr[$i] </li>";
} 

array_push($arr,"Los Angeles", "Calcutta","Osaka", "Beijing");

for ($i = 0; $i < count($arr); $i++) {
	echo "$arr[$i] <br>";
} 

sort($arr);

for ($i = 0; $i < count($arr); $i++) {
	echo "<li>$arr[$i] </li>";
} 
?>