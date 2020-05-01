<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ed05156d4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h1 {
        font-family: 'fantasy';
    }
    body {
        background-color: black;
        background-size: cover;
    }


</style>

<body>
<navh class="navbar navbar-dark bg-dark">

<h1 class="text-success bg-dark"><a href="accueil.php">Home</h1>


<div class="container">

    <input class="form-control mr-0" type="search" placeholder="Nom du thème ou de la matière recherchée" aria-label="Search">
    <button class="btn btn-outline-info btn-sm my-0 ">Chercher</button>

</div>
<button class="btn btn-outline-danger btn-sm my-0 "><a href="Inscription.php">Inscription</button>
<button class="btn btn-outline-light btn-sm my-0 "><a href="login.php">Connexion</button>
</navh>

    <!--/.Navbar-->
<h2 class="text-info "> Matières</h2>

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->



  <!--Slides and lightbox-->

  <div class="carousel-inner lightbox" role="listbox">
    <div id="mdb-lightbox-ui"></div>
    <!--First slide-->
    <div class=" carousel-item active text-center">

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>


    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>



    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>


    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<h3 class="text-info ">Thèmes</h3>
<img src="science.png" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
<img src="litterature.jpg" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">

</body>
</html>