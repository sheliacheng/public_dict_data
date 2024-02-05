<?php
//$path = 'all_exp_data.json';
$path = '../writing_data/allWritingDataForDB.json';
$contents = json_decode(file_get_contents($path));


//var_dump($contents);
if($contents instanceof Traversable){
   echo 'It is a traversable';
}else{
	echo 'It is not a traversable     ';
	echo gettype($contents->database);
}
