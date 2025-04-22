<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loops in PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="datatypes.php">Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="condtionals.php">Conditionals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="calender.php">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="calculator.php">Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="operators.php">Operators</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="arrays.php">Arrays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="functions.php">Functions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="header.php">Header</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://youtu.be/Fe0d7BzZOmI?si=RFx6Ed4pXLh6CfTh" target="_blank">Video</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </head>
<style>
  .navbar {
  background-color: black;
}

      /* Apply background color and text color */
      body {
        background-color: black;
        color: white;
      }

      /* Navbar styling - set background to black */
      .navbar {
        background-color: black;
      }

      /* Navbar links color */
      .navbar a {
        color: white !important;
      }

      /* Apply white button style */
      button {
        background-color: white;
        color: black;
      }
    /* Modernize the navbar styling */
    .navbar {
        background-color: #343a40; /* Dark gray */
        border-bottom: 2px solid #ffc107; /* Add a yellow accent line */
    }

    .navbar a {
        color: #ffc107 !important; /* Yellow text for links */
        font-weight: bold; /* Make links bold */
    }

    .navbar a:hover {
        color: #fff !important; /* White text on hover */
        text-decoration: underline; /* Underline on hover */
    }

    .navbar-toggler {
        border-color: #ffc107; /* Yellow border for the toggle button */
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255,193,7,1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar .form-control {
        background-color: #495057; /* Darker gray for input */
        color: #ffc107; /* Yellow text */
        border: 1px solid #ffc107; /* Yellow border */
    }

    .navbar .form-control:focus {
        background-color: #343a40; /* Match navbar background */
        color: #fff; /* White text */
        border-color: #ffc107; /* Yellow border */
    }

    .navbar .btn-outline-success {
        color: #ffc107; /* Yellow text */
        border-color: #ffc107; /* Yellow border */
    }

    .navbar .btn-outline-success:hover {
        background-color: #ffc107; /* Yellow background */
        color: #343a40; /* Dark gray text */
    }
      /* Input field style to match the theme */
    input[type="text"] {
      background: #555;
      color: #fff;
      border: 1px solid #ddd;
    }

      input[type="text"]:focus {
        background-color: #444;
        color: white;
        border-color: #aaa;
      }
    </style>  </head>

<body>


<?php
// loop

//while loop
//do while loop
//for loop
//foreach loop
$x = 1;
while ($x <= 5) {
    echo "hi there<br>";
    $x++; // Increment $x to avoid infinite loop
}
     
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 

</html>