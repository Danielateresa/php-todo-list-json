<?php

$elements = [
    "fare la spesa",
    "allenarsi",
    "preparare la cena",
    "passeggiata con Lilo"
];

header('Content-Type: application/json');
echo json_encode($elements);