<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav>

  </nav>

  <nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, red, blue);">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/PHPLESSONS/index.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
        <a class="nav-link text-white" href="/PHPLESSONS/index.php">Index</a>
          </li>
          <li class="nav-item">
        <a class="nav-link text-white" href="/PHPLESSONS/operators.php">Operators</a>
          </li>
          <li class="nav-item">
        <a class="nav-link text-white" href="/PHPLESSONS/conditionals.php">Conditionals</a>
          </li>
        </ul>
        <form class="d-flex mx-auto" role="search" style="width: 50%;">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

 <?php

      //String
      echo '<style>body { background-color: lightblue; }</style>';
      $name = 'Coding is fun';


      //Integer
      $name = 20;  

       //Float
       $name = 20.5784;

       //BooLean
       
    
       //Array
       $names = array("Apple","Banana","Cranberry");
       echo $names['2']


 ?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>