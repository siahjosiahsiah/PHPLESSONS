<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP Lessons</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/PHPLESSONS/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PHPLESSONS/conditionals.php">Conditionals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PHPLESSONS/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datatypes.php" >datatypes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
    $x = 1;

    if     ($x == 1) {
        echo "Daniel is very handsome!";
    } 
    elseif ($x == 2) {
        echo "Daniel is kinda handsome!";
    }
    elseif ($x == 2) {
        echo "Daniel is kinda handsome!";
    }
    elseif ($x==4) {
        echo "Daniel is kinda ugly!";
    }
    elseif  ($x == 4) {
        echo "Daniel is very ugly!";
    }

?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>