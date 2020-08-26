<?php

$fellowship = array(“Frodo", “Sam", “Gandalf", “Strider", “Gimli", “Legolas", “Boromir");
print “The fellowship of the ring members are: \n";
for ($i = 0; $i < count($fellowship); $i++) {
	print "{$fellowship[$i]}\n";
}
print “The fellowship of the ring members are: \n";

foreach ($fellowship as $fellow) {
	print "$fellow\n";  
}

?>