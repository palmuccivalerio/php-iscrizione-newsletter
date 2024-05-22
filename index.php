<?php
require_once __DIR__ . "/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="GET">
    <div>
      <label for="mail">inserisci la tua mail</label>
      <input type="text" name="mail" id="mail">
    </div>

    <input type="submit" value="Invia">
    
   
  </form>
</body>
</html>