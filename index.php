<?php
require('classes/Vehicule.php');
require('classes/Technician.php');

$vehicule1 = new Vehicule('AB-123-CD', '#1');
$mario = new Technician('Mario' , '#4');
$luigi = new Technician('Luigi', '#5');

$vehicule1->setTechnician($mario);
var_dump($mario->getVehicule());
$vehicule1->setTechnician($luigi);
var_dump($mario->getVehicule());

// 

$vA = new Vehicule('AA-666-AA');
$vB = new Vehicule('BB-666-BB');
var_dump($vA);
var_dump($vB);
$paul = new Technician('Paul');
$juliette = new Technician('Juliette');
$jalila = new Technician('Jalila');
var_dump($paul);
var_dump($juliette);
var_dump($jalila);
$paul->setVehicule($vA);
$juliette->setVehicule($vA);
$jalila->setVehicule($vB);
var_dump($vA);
var_dump($vB);
$paul->setVehicule($vB);
var_dump($paul);
var_dump($vA);
var_dump($vB);