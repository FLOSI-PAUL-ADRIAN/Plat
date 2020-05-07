<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    .parallax3 {
      background-image: url("./img/Chimie.jpg");

      /* Set a specific height */
      min-height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .parallax2 {
      background-image: url("./img/math.png");

      /* Set a specific height */
      min-height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .parallax {
      /* The image used */
      background-image: url("./img/informatique.jpg");

      /* Set a specific height */
      min-height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>



</head>

<body style="background-color: RGBA(255,0,0,0.2)">


  <?php include("navbar.php"); ?>




  </header>


  <div class="parallax"></div>
  <div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">Bravo ton cours est upload</h3>
    </div>
  </div>

  </div>

  <div class="parallax2"></div>

  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;">Nous sommes fiers de vous</h3>
    <p style="text-align:center;"> N'hésitez pas a découvrir davantages de nos cours.

    </p>
  </div>

  <div class="parallax3"></div>

</body>

<footer>
  <audio autoplay loop muted >
<source src="../images/kino der totem.mp3" type="audio/mpeg" volume="10" >
  </footer>

</html>