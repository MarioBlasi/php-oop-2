<?php

  require __DIR__ . './Models/Computer.php';
  require __DIR__ . './Models/Desktop.php';
  require __DIR__ . './Models/Laptop.php';

  // Creazione degli oggetti
  $desktop = new Desktop("Desktop");
  $laptop = new Laptop("Laptop");
  // Array di oggetti
  $computers = [$desktop, $laptop];
  // Chiamata al metodo displayProductType() polimorfico
  $desktop->displayProductType(); // Stampa: "Il computer desktop si avvia..."
  $laptop->displayProductType(); // Stampa: "Il computer portatile si avvia..."
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
    <div class="row">
      <div class="col">
        <div class="card bg-dark text-light h">
          <h1>php-oop-2</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- header -->
  <div class="container mt-3 ">
    <div class="row">
      <div class="col ">
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- nav -->
  <main>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 justify-content-md-center">
            <div class="col p-3">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://picsum.photos/600/300" alt="">
                        <h4 class="card-title mt-4"><?php echo $desktop->displayProductType(); ?></h4>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe aperiam quae ut dicta neque, suscipit, illo consequatur autem commodi similique nihil quas animi dolores ipsum quos, excepturi dolorum aliquid?</p>
                    </div>
                </div>
            </div>
            <div class="col p-3">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://unsplash.it/600/300?image" alt="">
                        <h4 class="card-title mt-4"><?php echo $laptop->displayProductType(); ?></h4>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe aperiam quae ut dicta neque, suscipit, illo consequatur autem commodi similique nihil quas animi dolores ipsum quos, excepturi dolorum aliquid?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <!-- main -->
  <footer>
    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <div class="card text-center bg-dark text-light ">
            <p class="mt-3"> by Mario Blasi</p>
          </div>
        </div>
      </div>
    </div>
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