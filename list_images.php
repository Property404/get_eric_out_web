<?php
	$dir = "images/";
	$return_array = array();
 if($dh = opendir($dir)){
        while(($file = readdir($dh)) != false){

            if($file == "." or $file == ".."){

            } else {
                $return_array[] = $file; // Add the file to the array
            }
        }
    }else{
	echo("error opening directory");
	}

    echo json_encode($return_array);
?>
