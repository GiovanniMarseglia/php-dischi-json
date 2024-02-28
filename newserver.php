<?php


if(isset($_GET['inde'])){

$id = $_GET['inde'];


$string = file_get_contents('data.json');
$disco=json_decode($string,true);

$newdisco=$disco[$id];


header('Content-Type:application/json');
echo json_encode($newdisco);
}




