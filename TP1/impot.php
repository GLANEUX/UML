<?php
class Impot { 
    private $name; 
    private $revenu;
    const SEUIL = 15000;
    const tauxImpot20 = 0.20; 
    const tauxImpot15 = 0.15;

    public function __construct($name, $revenu) {
        $this->name = $name; 
        $this->revenu = $revenu;
    }

    public function CalculImpot() {
        if ($this->revenu <=self::SEUIL) {
            return $this->revenu * self::tauxImpot15;
        } else {
            $impot = self::tauxImpot15 * self::SEUIL;
            $revenuRestants = $this->revenu - self::SEUIL;
            $impot += $revenuRestants * self::tauxImpot20;
            return $impot; 
        }
    }

    public function AfficheImpot() {
        $message = "Mr {$this->name}, votre impôt est de {$this->CalculImpot()} euros.";
        return $message;
    }
}
?>
