<?php

$elements = [
    "fare la spesa",
    "allenarsi",
    "preparare la cena",
    "passeggiata con Lilo"
];

//$elementsString = file_get_contents('elements.json');

//var_dump($elementsString);
header('Content-Type: application/json');
echo json_encode($elements);//dati leggibili da javascript

//$elementArray = json_decode($elementsString);//Dati leggibili da php
//var_dump($elementArray);