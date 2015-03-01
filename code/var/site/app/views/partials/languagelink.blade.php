<?php
if($lang == "en")
{	
 	echo "<a href=\"?lang=es&ts=" . time() . "&ref=" . $ref . "\" data-ajax=\"false\">español</a>";
}

if($lang == "es")
{	
 	echo "<a href=\"?lang=en&ts=" . time() . "&ref=" . $ref .  "\" data-ajax=\"false\">english</a>";
}
?>