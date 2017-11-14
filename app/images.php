<?php

$dir    = 'images/';
$images = scandir($dir);
for($i=2; $i < 6;$i++){

	echo "<div class=\"col-xl-3 col-sm-6 mb-3\">
   		  <a href=\"images/$images[$i]\">
 	         <img src=\"images/$images[$i]\" height=\"175px\" width=\"155px\" />
    	  </a>
        </div>";


}
   

?>
