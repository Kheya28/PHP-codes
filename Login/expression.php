<?php

	$pattern="/[[:alnum:]]+/";
	$text="dfgh4567";

	if(preg_match($pattern,$text))
	    echo "valid";
	else echo "invalid";
?>