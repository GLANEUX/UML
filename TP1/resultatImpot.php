<?php 
require_once 'impot.php'; 
if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $revenu = floatval($_POST['revenu']); 

    
    $impot = new Impot($name, $revenu);

 
    $impotAmount = $impot->CalculImpot();

    
    $resultMessage = $impot->AfficheImpot();

    echo $resultMessage; 
}
?>
