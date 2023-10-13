<?php class Mammifere {
    protected $cri;
    protected $taille;
    protected $sexe;
    protected $lieuHabitation;
    protected $placeChaineAlimentaire;

    public function __construct($cri, $taille, $sexe, $lieuHabitation, $placeChaineAlimentaire) {
        $this->cri = $cri;
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->lieuHabitation = $lieuHabitation;
        $this->placeChaineAlimentaire = $placeChaineAlimentaire;
    }

    public function crier() {
        echo $this->cri;
    }

    public function manger() {
        echo "Mange de la nourriture.";
    }

    public function mordre() {
        echo "Mord quelque chose.";
    }

    public function chasser() {
        echo "Chasse une proie.";
    }
}
 
class Chat extends Mammifere {
    protected $couleurPelage;
    protected $pattes;

    public function courir() {
        echo "Le chat court.";
    }

    public function marcher() {
        echo "Le chat marche.";
    }

    public function manger() {
        echo "Le chat mange des proies.";
    }
}

class Chien extends Mammifere {
    protected $couleurPelage;
    protected $pattes;

    public function courrir() {
        echo "Le chien court.";
    }

    public function marcher() {
        echo "Le chien marche.";
    }

    public function manger() {
        echo "Le chien mange de la nourriture préparée par son propriétaire.";
    }
}

class Poisson extends Mammifere {
    protected $couleurEcailles;
    protected $nageoire;

    public function nager() {
        echo "Le poisson nage dans l'eau.";
    }
}

class PoissonRouge extends Poisson {
}

class Requin extends Poisson {
    public function mordre() {
        echo "Le requin peut mordre avec ses dents acérées.";
    }
}


?>