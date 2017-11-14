<?php

$dir    = 'videos/';
$videos = scandir($dir);
for($i=2; $i < 4;$i++){

	echo "
   		  <video style=\"margin-left: 20px;\" width=\"320\" height=\"240\" controls>
  			<source src=\"videos/$videos[$i]\" type=\"video/mp4\">
  
 			 Your browser does not support the video tag.
		   </video>
        ";


}
   

?>
