<?php
$errors = []; // Création d'un tableau qui va contenir toute nos erreurs.
$months = [ // Création d'un tableau associatif contenant les mois de l'année.
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre',
];
$daysOfWeek = [
    'Monday' => '0',
    'Tuesday' => '1',
    'Wednesday' => '2',
    'Thursday' => '3',
    'Friday' => '4',
    'Saturday' => '5',
    'Sunday' => '6',
];

function getIndexOfDay($dayOfWeek)
{ // Elle retourne un élément du tableau par rapport à un parametre donnée et correspondant à un élément du tableau.
    global $daysOfWeek;
    return $daysOfWeek[$dayOfWeek];
}

// Dans le cas ou il y a des données, on vérifie les données entrée.
if ($_GET)
{
    // Si $_GET['months'] est défini.
    if (isset($_GET['months']))
    {
        if (is_numeric($_GET['months']) && $_GET['months'] <= 12 && $_GET['months'] >= 1)
        { // On vérifie que c'est uniquement un chiffre entier et que ce chiffre et entre 1 et 12 compris.
            $monthsNumber = $_GET['months'];
        }
        // Sinon on affichera une erreur.
        else
        {
            $errors[] = 'Veuillez séléctionner un mois compris entre 01 et 12.';
        }
    }
    // Dans le cas ou le $_GET['months'] n'est pas défini.
    else
    {
        $errors[] = 'Une erreur est survenue lors de la transmition du formulaire. Veuillez renvoyer le formulaire.';
    }

    // Si $_GET['years'] est défini.
    if (isset($_GET['years']))
    {
        if (is_numeric($_GET['years']) && $_GET['years'] <= 2050 && $_GET['years'] >= 1970)
        { // On vérifie que c'est uniquement un chiffre entier et que ce chiffre et entre 1970 et 2050 compris.
            $yearsNumber = $_GET['years'];
        }
        // Sinon on affichera une erreur.
        else
        {
            $errors[] = 'Veuillez séléctionner une année comprise entre 1970 et 2050';
        }
    }
    // Dans le cas ou le $_GET['years'] n'est pas défini.
    else
    {
        $errors[] = 'Une erreur est survenue lors de la transmition du formulaire. Veuillez renvoyer le formulaire.';
    }
}

if ($_GET && $errors == false)
{ // Si il y a des données et qu'il n'y a pas d'erreurs, on peut crée le tableau.
    $nbDaysInMonth = date('t', strtotime($yearsNumber . '-' . $monthsNumber)); // Indique le nombre de jour total dans un mois indiquer.
    $firstDayOfMonth = date('l', strtotime($yearsNumber . '-' . $monthsNumber)); // Indique le premier jour du mois indiquer.
    $indexOfFirstDayOfMonth = getIndexOfDay($firstDayOfMonth); // Contient le décalage de la semaine du premier jour du mois
}

function tableLine($decalage, $maxDayOfMonth) // Création d'une fonction pour ajouter les case et les jours de notre calendrier.
{
    $tr = null; // Création d'une variable qui va contenir chaque <tr> du tableau selon le nombre de jours.
    $dayCount = 0; // Qui va contenir le nombre de jours que l'on ajoute.
    $createdFirstLine = false; // Permet de savoir si la première semaine 'ligne' du mois à était ajouter a notre calendrier.
    while ($dayCount < $maxDayOfMonth) // Tant que le nombre de jour que l'on ajoute et strictement inférieur au nombre de jour maximum dans un mois.
    {
        $tr = $tr . '<tr>'; // Concaténation de notre variable + sont contenue (<tr>).
        if ($decalage != 0 && $createdFirstLine == false) // si notre décalage est différent de 0 et que la première ligne du mois àn'a pas encore était créé.
        {
            for ($daysCases = 0; $daysCases < $decalage; $daysCases++) // Le nombre de cases est égale à 0 et que le nombre de case est inférieur à notre décalage, alors on ajoute une case.
            {
                $tr = $tr . '<td>Mois avant.</td>'; // Concaténation de notre variable + sont contenu (<td>, </td>).
            }
            $rememberDaysToAdd = 6 - $decalage;
            for ($daysCases = 0; $daysCases <= $rememberDaysToAdd; $daysCases++) // Le nombre de cases est égale à 0 et que daycase est inférieur ou égale à 6 - le décalage, alors on ajoute une case.
            {
                $dayCount++;
                $tr = $tr . '<td>' . $dayCount . '</td>';
                if ($dayCount == $maxDayOfMonth)
                {
                    break;
                }
            }
            $createdFirstLine = true;
        }
        else
        {
            for ($daysCases = 0; $daysCases <= 6; $daysCases++)
            {
                $dayCount++;
                $tr = $tr . '<td>' . $dayCount . '</td>';
                if ($dayCount == $maxDayOfMonth)
                {
                    break;
                }
            }
        }
        $tr = $tr . '</tr>';
    }
    return $tr;
}
