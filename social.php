<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file="/storage/emulated/0/Download/posts.json";
$posts=json_decode(file_get_contents($file),true);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data=file_get_contents("php://input");
  $newpost=json_decode($data,true);
  $posts[]=$newpost;
  file_put_contents($file,json_encode($posts));
};
echo json_encode($posts)
?>