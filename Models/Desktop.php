<?php
// Classe Desktop che estende Computer 
  // classe figlio questa classe puo modificare il genotore USANDO EXTENDS
  class Desktop extends Computer{
    public function displayProductType() {
      return "Desktop";
      // echo "Il computer desktop si avvia...";
  }
  }