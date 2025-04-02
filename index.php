<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7D4pr2IK8iDkDz1pEg1FwnNQyjqNsw1hZd" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">MySite</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="operators">operators
    </li>
    <li class="nav-item">
      <a class="nav-link" href="datatypes">datatypes</a>
    </li>
    </ul>
    <style>
      body {
      background-color: black;
      color: white;
      }
      .navbar {
      background-color: red !important;
      }
      .navbar-brand, .nav-link {
      font-family: 'Arial', sans-serif;
      font-weight: bold;
      color: white !important;
      }
      .nav-link:hover {
      text-decoration: underline;
      }
    </style>
  </div>
  </div>
</nav>
  </head>
  <body>

  <form method="GET">
      <input type="text" name="person">
      <button>SUBMIT</button>
</form>

 <?php
    //this code is adding any name in front of "sitting down counting money!"
    $name = $_GET['person'];
    // what the code is going to do when you put "person...."
     echo $name. " is the GOAT!";
 ?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A2YLpAB1JdQtGoUu7qUUG6pVVU0Z8FRpONKcE1zAcDflVQOeErk1RxTsMef6B" crossorigin="anonymous"></script>
  </body>
</html>