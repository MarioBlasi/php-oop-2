<?php
//  require __DIR__ . '/Models/DisplayTrait.php';
// Classe Laptop che estende Computer classe figlio 
  //classe figlio questa classe puo modificare il genotore USANDO EXTENDS
class Laptop extends Computer{
  // use DisplayTrait;
    public function displayProductType() {
      return "Laptop";
      // echo "Il computer portatile si avvia...";
  }
  }