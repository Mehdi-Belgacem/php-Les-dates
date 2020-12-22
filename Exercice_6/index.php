<?php 
  $date = date('t', strtotime('2016-02'));
  // $date = mktime('0', '0', '0', '2', '0', '2016');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 9 Exercice 6:</h1>
  <p><?= 'Le mois de Février 2016 contenait ' . $date . ' jours.' ;?></p>
</body>
</html>