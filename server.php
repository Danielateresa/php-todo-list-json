<?php

/* $elements = [
    "fare la spesa",
    "allenarsi",
    "preparare la cena",
    "passeggiata con Lilo"
]; */

$elementsString = file_get_contents('elements.json');
$elementArray = json_decode($elementsString);//Dati leggibili da php

if (isset($_POST['element'])) {
    $newElement = $_POST['element'];

    array_push($elementArray, $newElement);
    //var_dump($elementArray);

    $jsonElements = json_encode($elementArray);
    file_put_contents('elements.json', $jsonElements);
}

//var_dump($elementsString);
header('Content-Type: application/json');
echo json_encode($elementArray);//dati leggibili da javascript


//var_dump($elementArray);