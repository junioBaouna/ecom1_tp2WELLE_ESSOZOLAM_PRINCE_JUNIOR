<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" type="text/css" href="./style css/style.css" />
  <body>
    <?php
  if (isset($_POST['address']) && $_POST['address'] == 'formulaire') {
    $createAddress($_POST);
}
?>
    <form method="post" action="./pages/formulaire.php" name="form">
      <h1><b>Connexion d'adresses</b></h1>
      <p class="choix_adresse"><b>Combien d'adresses avez-vous?</b></p>
      <br />
      <div class="input">
        <label for='address'> <b> Nombre d'adresses : </b></label>
        <input
          type="number"
          name="address"
          min="1"
          max="10"
          id="address"
          placeholder="veuillez saisir les informations sur le nombe d'adresses"
          required
        />
      </div>
      <br /><br />
      <div align="center">
        <button type="submit">Se connecter</button>
      </div>
      
    </form>
  </body>
</html>