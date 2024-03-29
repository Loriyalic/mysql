<?php

// Etape de connexion à une base de données
require_once __DIR__ . ('/config/config.php');

// Fonction qui retourne la connexion à notre base de données
require_once __DIR__ . ('/function/database.fn.php');

$db = getPDOlink($config);

// Fonctions pour afficher la totalité des films ou un film par id
require_once __DIR__ . ('/function/movies.fn.php');
$movie = findMovieById($db, $_GET['id']);

// Si je n'ai pas d'id dans l'URL OU que $movie['id'] = NULL (vide)
if (!isset($_GET['id']) || empty($movie['id'])) {
    // On fait une redirection
    header("Location: /");
} else {
    // Stocke moi le nom du film
    $title = 'Détails du film : ' . $movie['title'];
}

// Version ternaire :
// !isset($_GET['id']) || empty($movie['id']) ? header("Location: /") : $title = 'Détails du film : ' . $movie['title'];

// Inclut le contenu du fichier header.php (notre connexion bdd et en-tête HTML)
require_once __DIR__ . ('/utilities/header.php');

// On stocke dans $picture la requête
$picture = findPictureByMovie($db, $_GET['id']);

// On stocke le chemin de l'image
$path = $picture['pathImg'];

?>

<div class="text-center my-2">
    <h1>Détails du film</h1>
</div>

<!-- Affiche les informations du film. -->
<?php require_once __DIR__ . ('/utilities/cardMovie.php'); ?>

</body>

</html>