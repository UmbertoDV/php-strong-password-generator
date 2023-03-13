<?php
function password_generate($chars) 
{
  $data = '$%&/_()1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>php-strong-password-generator</title>
</head>

<body>
  <div class="container my-5">
    <form method="$_GET" action="">
      <label for="passw-lenght">Lunghezza PASSWORD:</label>
      <input type="number" id="passw-lenght" name="passw-lenght" min="1">
      <input type="submit" value="Genera PASSWORD">
    </form>
    <div class="passw-generated">
      <?php 
        $lengh_passw =  $_GET["passw-lenght"] ? $_GET["passw-lenght"] : "";
        if($lengh_passw > 0){
          echo password_generate($lengh_passw);
        }
        else{
          $lengh_passw = "";
          echo "Inserisci la lunghezza della password";
        }
      ?>
    </div>
  </div>
</body>

</html>