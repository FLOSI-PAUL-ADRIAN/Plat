<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ed05156d4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <?php
          include("navbar.php");
        ?>
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

<h1 class="text-info "><a href="matiere.php"></a>Matières</h1>

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
        <img src="./img/physique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/math.png" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/Chimie.jpg" class="img-fluid" width ="500" height="300">
      </figure>


    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/svt.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/informatique.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/Histoirgeo.jpg" class="img-fluid" width ="500" height="300">
      </figure>



    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item text-center">

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/anglais.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/espagnol.jpg" class="img-fluid" width ="500" height="300">
      </figure>

      <figure class="col-md-0 d-md-inline-block">
        <img src="./img/français.jpg" class="img-fluid" width ="500" height="300">
      </figure>


    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<h2 class="text-info "><a href="theme.php">Thèmes</h2>
<img src="./img/science.png" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
<img src="./img/litterature.jpg" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
<img src="./img/langues.jfif" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
<img src="./img/informatique.jpg" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
<img src="./img/Histoirgeo.jpg" alt="Logo HTML w3" style="width:400px; height:auto" class="float-left img-thumbnail">
</body>
</html>