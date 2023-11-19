<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    
</body>
</html>
<h2>Veuillez confirmer vos informations</h2>
<div>
<link rel="stylesheet" type="text/css" href="../style css/style3.css" />
<?php
?>
<form method='post' action='addToDB.php'>
<?php
echo "<b> Le nombre d'adresse choisis est de :<b> ";
echo $_SESSION['addressnb'];

for ($i = 1; $i <= $_SESSION['addressnb']; $i++){
    $_SESSION["formData"]=$_POST;
    
    $streetIsValid=streetIsValid($_POST["street$i"]);
    $zipCodeIsValid =zipCodeIsValid($_POST["zipcode$i"]);
}
$infos = $_POST;
echo "<form action='addToDB.php' method='post'>";

if ($streetIsValid["isValid"] &&$zipCodeIsValid["isValid"]){
if(count($infos) > 0) {
    foreach($infos as $key => $value) {
        echo "<input type='text' name='$key' value='$value' readonly /> <br />";
    }
}
}else{
    echo "erreur de connection. Une information n'a pas été bien écrite ";
    
}

echo "<br/> <br />";
echo "<button type='submit'>Confirmer</button>";

echo "<br/>";
echo "<br/> <br />";

?>

</form>;

</div>