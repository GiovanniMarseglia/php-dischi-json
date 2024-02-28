<?php

$string = file_get_contents('data.json');
$disco=json_decode($string,true);
header('Content-Type:application/json');
echo json_encode($disco);