<?php
class CompteBancaire {
    public $nom;
    public $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($montant) {
        $this->solde += $montant;
    }

    public function retrait($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Fonds insuffisants";
        }
    }

    public function affiche() {
        echo "Le solde du compte bancaire de $this->nom est de $this->solde euros.";
    }
}



?>
