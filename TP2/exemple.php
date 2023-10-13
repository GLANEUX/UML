<?php
require('compte.php'); 

$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(350); 
$compte1->retrait(200);
$compte1->affiche();
?><br><?php
$compte2 = new CompteBancaire();
$compte2->depot(25);
$compte2->affiche();
?>
