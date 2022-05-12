<?php
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    die();
}
$data = $_GET['username'];

$dataJson = file_get_contents('../../js/tp-jquery/eje-4-data.json');

$decoded_json = json_decode($dataJson, true);

foreach($decoded_json as $user){
    if($user['username'] == $data){
        echo json_encode(['Nombre de usuario no disponible.' => true]);
        break;
    }else{
        echo json_encode(['Nombre de usuario disponible.' => false]);
        break;
    }
}
?>