<?php

$data = file_get_contents('http://feedbulls-api.ap01.aws.af.cm/display/feelings');
$data = json_decode($data);
//var_dump($data);
$array = array();
$array['happy']=$data->feelings->happy;
$array['sad']=$data->feelings->sad;
$array['confuse']=$data->feelings->confuse;
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($array);

?>