<?php 
  $date = time();
  $lastDate = gmmktime(15, 0, 0, 2, 8, 2016);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 9 Exercice 4:</h1>
  <p><?= 'Le Timestamp actuel est : ' . $date ;?>
  <p><?= 'Le Timestamp du Mardi 2 août 2016 à 15h est : ' . $lastDate; ?></p>
  </p>
</body>
</html>