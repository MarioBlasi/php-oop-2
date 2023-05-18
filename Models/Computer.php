<?php
    require __DIR__ . '/DisplayTrait.php';
     // Classe Computer (parent class)
  class Computer{
    use DisplayTrait;
    //displayProductType restituisce il tipo di prodotto corrispondente.
    protected $productType;
    
    public function __construct($productType) 
    {
        // echo "Il computer si avvia...";
        $this->productType = $productType;
    }

    public function displayProductType() {
        return $this->productType;
        
    }
}
?>