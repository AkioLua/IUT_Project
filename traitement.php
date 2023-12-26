<?php

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$annee = $_POST['annee'];
$groupe = $_POST['groupe'];
$entreprise = $_POST['entreprise'];
$creneau = $_POST['creneau'];

// Rediriger l'utilisateur vers une page de confirmation
header("Location: confirmation.html");
exit();
?>
