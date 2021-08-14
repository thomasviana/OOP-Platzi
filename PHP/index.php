<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberVan.php");
require_once("account.php");

$uberX = new UberX("DHJ345", new Account("Andres Herrera", "AND456"),"Chevrolet", "Spark");
$uberX->printDataCar();  

$uberVan = new UberVan("SLK345", new Account("Andrea Herrera", "DKN345"),"Ford", "Edge");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

$uberX = new UberX("SLK345", new Account("Andrea Herrera", "DKN345"),"Ford", "Edge");
$uberX->setPassenger(4);
$uberX->printDataCar();



?>