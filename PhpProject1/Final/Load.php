<?php

include'./models/IDAO.php';
$sql = new IDAO();
$vars = filter_input_array(INPUT_POST);
$response = '';
$completed = 0;
$imgs = $sql->sql('SELECT * FROM phpadvclassspring2016.photos');
$count = count($imgs);
while(true){
	if($vars['totalRows'] == $completed){
		break;
	}
	for($uth=0;$uth<5;$uth++){
		$number = mt_rand(0,$count-1);
		if($uth==4){
			$response.='--><a href="index.php?id='.$imgs[$number]['photo_id'].'"><img class="loaded" src="./uploads/'.$imgs[$number]['filename'].'"/></a><br/>';
		}
		else if($uth==0){
			$response.='<a href="index.php?id='.$imgs[$number]['photo_id'].'"><img class="loaded" src="./uploads/'.$imgs[$number]['filename'].'"/></a><!--';
		}
		else{
			$response.='--><a href="index.php?id='.$imgs[$number]['photo_id'].'"><img class="loaded" src="./uploads/'.$imgs[$number]['filename'].'"/></a><!--';
		}
	}
	$completed++;
}
echo $response;