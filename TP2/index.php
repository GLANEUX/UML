<?php
require 'class/compte.php'; 

$comptes = [
    'compte1' => new CompteBancaire('Duchmol', 800),
    'compte2' => new CompteBancaire(),
];
 
if (isset($_POST['choix_compte'])) {
    $compteSelectionne = $comptes[$_POST['choix_compte']];
}

if (isset($_POST['depot'])) {
    $montantDepot = (float)$_POST['montant_depot'];
    $compteSelectionne->depot($montantDepot);
}

if (isset($_POST['retrait'])) {
    $montantRetrait = (float)$_POST['montant_retrait'];
    $compteSelectionne->retrait($montantRetrait);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comptes Bancaires</title>
</head>
<body>
    <h1>Sélectionnez un compte</h1>
    <form method="post">
        <select name="choix_compte">
            <?php foreach ($comptes as $nomCompte => $compte) { ?>
                <option value="<?= $nomCompte ?>"><?= $compte->getNom() ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Afficher le solde">
    </form>

    <?php if (isset($compteSelectionne)) { ?>
        <h2>Solde du compte : <?= $compteSelectionne->getSolde() ?> euros</h2>
        <h3>Dépôt d'argent</h3>
        <form method="post">
            <input type="number" name="montant_depot" step="0.01" required>
            <input type="hidden" name="choix_compte" value="<?= $_POST['choix_compte'] ?>">
            <input type="submit" name="depot" value="Déposer">
        </form>
        <h3>Retrait d'argent</h3>
        <form method="post">
            <input type="number" name="montant_retrait" step="0.01" required>
            <input type="hidden" name="choix_compte" value="<?= $_POST['choix_compte'] ?>">
            <input type="submit" name="retrait" value="Retirer">
        </form>
    <?php } ?>
</body>
</html>
