<?php  

// creer une fonction pour recuperer les messages de succès ou d'erreur

function setmessage($msg, $type ="success") {
   if ($msg) {
    $_SESSION["msg"]["content"] = $msg;
    $_SESSION["msg"]["type"] = $type;

    // $_SESSION["msg"] = [
    //     "content" => $msg,
    //     "type" => $type,
    // ];

   } 
}


// function estAdmin(){
//     if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "admin") {
//         return true;
//     }
//     return false;
// }

// function estClient(){
//     if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "client") {
//         return true;
//     }
//  return false;
// }

// cette fonction permet de recuperer les messages de session
function enregistrerLesDonneesDeLInput() {
   if (isset($_POST)) {
      $_SESSION["input"] = $_POST;
   }
}

function supprimerLesDonneesDeLInput() {
   $_SESSION["input"] = null;
}

// cette fonction permet de recuperer les donnees de l'input
// elle prend en parametre le nom de l'input et retourne la valeur de l'input
// si l'input n'existe pas, elle retourne null
function recupererLesDonneesDeLInput($nom) {
   return isset($_SESSION["input"][$nom]) ? $_SESSION["input"][$nom] : null;
}

function dateDepart($id) {
    // Connexion à la base de données (à adapter selon ton projet)
    $pdo = new PDO("mysql:host=localhost;dbname=globe trek", "root", "");

    // Préparation de la requête : on récupère la réservation en cours (date de départ la plus proche et future)
    $stmt = $pdo->prepare("SELECT date_depart 
                           FROM reservations 
                           WHERE chambre_id = :id 
                             AND date_depart >= CURDATE() 
                           ORDER BY date_depart ASC 
                           LIMIT 1");

    $stmt->execute(["id" => $id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result ? $result["date_depart"] : null;
}
