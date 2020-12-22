<?php
require 'calendarUtility.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <h1>Partie 9 TP:</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php if (isset($monthsNumber) && isset($yearsNumber) && $errors == false) : ?>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <table>
                  <thead>
                    <tr>
                      <th scope="col">Lundi</th>
                      <th scope="col">Mardi</th>
                      <th scope="col">Mercredi</th>
                      <th scope="col">Jeudi</th>
                      <th scope="col">Vendredi</th>
                      <th scope="col">Samedi</th>
                      <th scope="col">Dimanche</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?= tableLine($indexOfFirstDayOfMonth, $nbDaysInMonth ); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <?php else : ?>
          <?php if ( $errors != false ):?>
            <ul>
            <?php foreach ($errors as $error):?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
          <?php endif;?>
          <form>
            <select name="months" id="months">
              <?php foreach ($months as $monthValue => $months) : ?>
                <option value="<?= $monthValue ?>"><?= $months ?></option>
              <?php endforeach; ?>
            </select>
            <select name="years" id="years">
              <?php for ($year = 1970; $year <= 2050; $year++) : ?>
                <option value="<?= $year ?>"><?= $year ?></option>
              <?php endfor; ?>
            </select>
            <input type="submit" value="Valider">
          </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>