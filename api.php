<?php
require __DIR__ . '/database.php';
//la tipologia del genere è rappresentata dal valore catturato da get
if($_GET['genre'] === 'all'){
    header('Content-Type: application/json');
    echo json_encode($database);
}
else{
    $filteredDatabase = [];
    //imposto il ciclo foreach per scorrere l'array in funzione del genere
    foreach($database as $data){
        if($data['genre'] === $_GET['genre']){
            $filteredDatabase[] = $data;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($filteredDatabase);
}
//var_dump($database);
?>