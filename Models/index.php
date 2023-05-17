<?php
  // Classe Computer (parent class)
  class Computer{
    public $wheels;

    public function __construct($wheels)
    {

      $this->wheels = $wheels;
    }

    public function componente() 
    {
      return 'porca troia';
    }
  }

  // Classe Desktop che estende Computer 
  // classe figlio questa classe puo modificare il genotore USANDO EXTENDS
  class Desktop{

  }
  // Classe Laptop che estende Computer classe figlio 
  //classe figlio questa classe puo modificare il genotore USANDO EXTENDS
  class Laptop {

  }
  // Creazione degli oggetti
  $desktop = new Desktop("Desktop");
  $laptop = new Laptop("Laptop");

  var_dump($desktop);
  var_dump($laptop);
  // Array di oggetti
  $computers = [$desktop, $laptop];


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
      <div class="container mt-5 shadow">
        <div class="row">
          <div class="col p-3">
            <div class="card">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempora corrupti laborum ut maiores labore! Enim, quod nihil vel ab deserunt est dolor. Accusantium rem, magnam cupiditate ratione ad adipisci.</p>
            </div>
          </div>
          <div class="col p-3">
            <div class="card">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempora corrupti laborum ut maiores labore! Enim, quod nihil vel ab deserunt est dolor. Accusantium rem, magnam cupiditate ratione ad adipisci.</p>
            </div>
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