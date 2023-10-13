<?php
require 'class/mammifere.php'; 

$requin = new Requin("Grrr", "Très grand", "Mâle", "Océan", "Prédateur");
$requin->crier(); ?><br><?php
$requin->nager(); ?><br><?php
$requin->mordre(); ?><br><?php

$poissonRouge = new PoissonRouge("Glou glou", "Petit", "Inconnu", "Aquarium", "Animal de compagnie");
$poissonRouge->crier(); ?><br><?php
$poissonRouge->nager(); ?><br><?php

$chien = new Chien("Wouf", "Moyen", "Mâle", "Maison", "Animal de compagnie");
$chien->crier(); ?><br><?php
$chien->courrir(); ?><br><?php
$chien->marcher(); ?><br><?php

$chat = new Chat("Miaou", "Petit", "Femelle", "Maison", "Animal de compagnie");
$chat->crier(); ?><br><?php
$chat->courir(); ?><br><?php
$chat->marcher(); ?><br><?php
$chat->manger();?><br><?php

?>