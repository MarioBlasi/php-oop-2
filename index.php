<?php
  // Classe Computer (parent class)
  class Computer{
    //displayProductType restituisce il tipo di prodotto corrispondente.
    protected $productType;

    public function __construct($productType) 
    {
        echo "Il computer si avvia...";
        $this->productType = $productType;
    }

    public function displayProductType() {
        return $this->productType;
        
    }
}

  // Classe Desktop che estende Computer 
  // classe figlio questa classe puo modificare il genotore USANDO EXTENDS
  class Desktop extends Computer{
    public function displayProductType() {
      return "Desktop";
      echo "Il computer desktop si avvia...";
  }
  }
  // Classe Laptop che estende Computer classe figlio 
  //classe figlio questa classe puo modificare il genotore USANDO EXTENDS
  class Laptop extends Computer{
    public function displayProductType() {
      return "Laptop";
      echo "Il computer portatile si avvia...";
  }
  }
  // Creazione degli oggetti
  $desktop = new Desktop("Desktop");
  $laptop = new Laptop("Laptop");

  var_dump($desktop);
  var_dump($laptop);
  
  // Array di oggetti
  $computers = [$desktop, $laptop];

  // Chiamata al metodo displayProductType() polimorfico
  $desktop->displayProductType(); // Stampa: "Il computer desktop si avvia..."
  $laptop->displayProductType(); // Stampa: "Il computer portatile si avvia..."
  
  // Stampo le card utilizzando Bootstrap
  
  //echo ecc ecc 
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="container text-center mt-5">
    <h1>php-oop-2</h1>
  </header>
  <main>
      <div class="container mt-5 ">
        <div class="row">
          <div class="col p-3">
            <?php foreach ($computers as $computer): ?>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $computer->displayProductType(); ?> </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe aperiam quae ut dicta neque, suscipit, illo consequatur autem commodi similique nihil quas animi dolores ipsum quos, excepturi dolorum aliquid?</p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>