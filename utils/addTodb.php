<?php
require_once('../functions/crud.php');
require_once "../configuration/connexion.php";
// La page addToDb va permettre de faire d'envoyer nos informations vers la base de données

$newData=$_SESSION["formData"];
for ($i = 1; $i <= $_SESSION['addressnb']; $i++){
    $newAddressData = [
        "street" => $_SESSION["formData"]["street$i"],
        "street_nb" => $_SESSION["formData"]["street_nb$i"],
        "type" => $_SESSION["formData"]["type$i"],
        "city"=> $_SESSION["formData"]["city$i"],
        "zipcode"=> $_SESSION["formData"]["zipcode$i"],
    ];
    //l'ajout de l'adresse dans la base données
    createAddress($newAddressData);

}