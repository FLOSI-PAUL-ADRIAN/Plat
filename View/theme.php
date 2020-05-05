<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="search.css">

    <script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

    <title>Theme</title>
</head>
<body>
<?php
          include("navbar.php");
        ?>

        <div> 

        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

<ul id="myMenu">
  <li><a href="#">HTML</a></li>
  <li><a href="#">CSS</a></li>
  <li><a href="#">JavaScript</a></li>
  <li><a href="#">PHP</a></li>
  <li><a href="#">Python</a></li>
  <li><a href="#">jQuery</a></li>
  <li><a href="#">SQL</a></li>
  <li><a href="#">Bootstrap</a></li>
  <li><a href="#">Node.js</a></li>
</ul>
        </div>
        

</body>
</html>