<?php
function create($data){
    global $conn;
    $query ="INSERT INTO address ('id','street','street_nb','type','city','zipcode') VALUES (NULL,".$data['street'].", ".$data['street_nb'].", ".$data['type'].",".$data['city']."".$data['zipcode'].");";
    $result =mysqli_query($conn,$query);

}
// Lecture des marqueurs (les 3 "?" dans la query)
function createAddress($data) {
    global $conn;
    $query="INSERT INTO address VALUES (NULL,?,?,?,?,?)";
    If( $stmt=mysqli_prepare($conn, $query)){
    /* Lecture des marqueurs */
    mysqli_stmt_bind_param($stmt,"sisss",$data['street'],$data['street_nb'],$data['type'],$data['city'],$data['zipcode']);
    /* Exécution de la requête*/
    // s=string , i= number or integer
    $result= mysqli_stmt_execute($stmt);
    echo "<br> <br>";
    echo"<b> Merci de nous voir fait confiance!!!Votre adresse a été ajoutée avec succès!! Un responsable vous contactera ultérieurament</b>";
    echo "<br> <br>";
    var_dump($result);
    return $result;
}
};

function updateAddress($data){
   // fonction pour changer la valeur intiale d'un utilisateur par une autre
        global $conn;
        $query = "UPDATE address set 
                    street = ?,
                    street_nb = ?,
                    type = ?, 
                    city = ?,
                    zipcode = ?
                    where id = ?";
         if ($stmt=mysqli_prepare($conn,$query)){
           
            mysqli_stmt_bind_param($stmt,"sisss",$data['street'],$data['street_nb'],$data['type'],$data['city'],$data['zipcode'],$data['id']);
            
            $result = mysqli_stmt_execute($stmt);
            echo "</br></br>";
            echo "La valeur initiale de votre adresse a été changée";
            echo "</br></br>";
            var_dump($result);
            return $result;
            echo "</br></br>";
         }
}

function deleteAddress(int $id)
{
    // fonction permettant de supprimer les informations d'un utilisateur juste en ayant son id
    global $conn;

    $query = "DELETE FROM address
                WHERE address.id = ?;";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id,
        );
        $result = mysqli_stmt_execute($stmt);
    }
}