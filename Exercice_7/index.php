<?php 
  $date = date('d/m/Y', strtotime('+20 days'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 9 Exercice 7:</h1>
  <p><?= 'Nous serons le ' . $date ;?></p>
</body>
</html>