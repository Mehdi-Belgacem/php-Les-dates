<?php 
  $lastDate = new DateTimeImmutable('2016-05-16'); // On initialise une date passé.
  $date = new DateTimeImmutable('2020-12-14'); // On initialise la date actuel.
  $difference = $lastDate -> diff($date); // Retourne la différence entre deux date donnée ($lastDate & $date).
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 9 Exercice 5:</h1>
  <p><?= $difference -> format('%a jours'); ?></p>
</body>
</html> 


<!-- $lastDate = '05/16/2016'; // On initialise une varibale avec la date voulu.
  $date = '12/14/2020'; // On initialise une variable avec la date du jour.
  $lastDateTimestamp = strtotime($lastDate); // On converti notre variable en timestamp ( nombre de seconde depuis 1970).
  $dateTimestamp = strtotime($date); // On converti notre variable en timestamp ( nombre de seconde depuis 1970).
  $numbersDaysTimestamp = $dateTimestamp - $lastDateTimestamp; // On initialise une variable qui va soustraire nos deux timestamp.
  $numbersDays = $numbersDaysTimestamp / 86400; // 60 secondes * 60 minutes * 24 heures = 86400. On initialise une varibale qui va diviser le résultat de $numbersDaysTimestamp avec le résultat de notre calcul ( 86400 ) pour obtenir le nombre de jour qui sépare les deux dates.
-->