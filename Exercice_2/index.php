<?php 
  $years = date('Y');
  $days = date('d');
  $months = date('m');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 9 Exercice 2:</h1>
  <p><?= 'Bonjour, nous somme le ' . $days . '-' . $months . '-' . $years ; ?></p>
</body>
</html>