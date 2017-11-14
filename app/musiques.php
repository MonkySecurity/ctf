<?php

   
   $dir    = 'musiques/';
$musiques = scandir($dir);

for($i=2; $i < 4;$i++){
	
	echo "
   			<audio style=\"margin-left: 20px;\" controls>
		  
		  		<source src=\"musiques/$musiques[$i]\" type=\"audio/mpeg\">
				Your browser does not support the audio element.
			</audio>  
           ";
		

}
?>
