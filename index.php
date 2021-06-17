<?php

  require_once __DIR__ .'/movie.php';

  $film = new movie('Venom');
  $film->year = '2018';

  var_dump($film)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>
    Il nome del film è: 
    <?php
      echo $film->title
    ?>
  </h1>
  <h2>
    L'anno del film è: 
    <?php
      echo $film->year
    ?>
  </h2>


</body>
</html>