<?php 

try {
$db = new PDO("mysql:host=localhost;dbname=globe trek", "root", "");
    
} catch (PDOException $e) {
    echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
}


function recupererToutesLesDestinations(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM destinations ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function AjouterUneDestination($nom, $description, $prix, $pays_id, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO destinations VALUES(null, :nom, :description, :prix, :pays_id, :image)");
        return $q->execute([
            "nom" => $nom,
            "description" => $description,
            "prix" => $prix,
            "pays_id" => $pays_id,
            "image" => $image
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }

}


function supprimerUneDestination($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM destinations WHERE id=:id");
        return $q->execute([
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererUneDestination($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM destinations WHERE id=:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function modifierUneDestination($id, $nom, $description, $prix, $pays_id, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE destinations SET nom=:nom, description=:description, prix=:prix, pays_id=:pays_id, image=:image WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "description" => $description,
            "prix" => $prix,
            "pays_id" => $pays_id,
            "image" => $image,
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererTousLesPays(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM pays");
        $q->execute();

        return $q->fetchAll();
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function ajouterUnPays($nom, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO pays VALUES(null, :nom, :image)");
        return $q->execute([
            "nom" => $nom,
            "image" => $image
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function supprimerUnPays($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM pays WHERE id=:id");
        return $q->execute([
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererUnPays($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM pays WHERE id=:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function modifierUnPays($id, $nom, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE pays SET nom=:nom, image=:image WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "image" => $image,
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function seconnecter($email) {
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute([
            "email" => $email
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}
function inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, $role){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES(null, :prenom, :nom, :adresse, :tel, :email, :mdp, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererTousLesClients(){
    global $db;
    try {   
        $q = $db->prepare("SELECT * FROM users WHERE role =:role");
        $q->execute([
            "role" => "client"
        ]);
        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function supprimerUnUtilisateur($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM users WHERE id=:id");
        return $q->execute([
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererUnUtilisateur($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE id=:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererTousLesEmployes(){
    global $db;
    try {   
        $q = $db->prepare("SELECT * FROM users WHERE (role =:role1 OR role =:role2) AND id != :id");
        $q->execute([
            "role1" => "admin",
            "role2" => "employe",
            "id" => $_SESSION["user"]->id
        ]);
        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function avoirInfoUtilisateur($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE id=:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function mettreAjourLesDonneesUtilisateur($id, $prenom, $nom, $adresse, $tel, $email, $role){
    global $db;
    try {
        $q = $db->prepare("UPDATE users SET prenom=:prenom, nom=:nom, adresse=:adresse, tel=:tel, email=:email, role=:role WHERE id=:id");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "email" => $email,
            "role" => $role,
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function mettreAjourLeMotDePasse($id, $mdp){
    global $db;
    try {
        $q = $db->prepare("UPDATE users SET mdp=:mdp WHERE id=:id");
        return $q->execute([
            "mdp" => $mdp,
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function ajouterUneChambre($nom, $type, $description, $capacite, $prix, $image, $disponible){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO chambres VALUES(null, :nom, :type, :description, :capacite, :prix, :image, :disponible)");
        return $q->execute([
            "nom" => $nom,
            "type" => $type,
            "description" => $description,
            "capacite" => $capacite,
            "prix" => $prix,
            "image" => $image,
            "disponible" => $disponible
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
} 


function recupererToutesLesChambres(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM chambres");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function supprimerUneChambre($idchambres){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM chambres WHERE id=:idchambres");
        return $q->execute([
            "idchambres" => $idchambres
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function recupererUneChambre($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM chambres WHERE id=:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function modifierUneChambre($id, $nom, $type, $description, $capacite, $prix, $image, $disponible){
    global $db;
    try {
        $q = $db->prepare("UPDATE chambres SET nom=:nom, type=:type, description=:description, capacite=:capacite, prix=:prix, image=:image, disponible=:disponible WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "type" => $type,
            "description" => $description,
            "capacite" => $capacite,
            "prix" => $prix,
            "image" => $image,
            "disponible" => $disponible,
            "id" => $id
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function ajouterReservation($reference, $date_arrivee, $date_depart, $nombre_nuits, $nombre_personnes, $demandes_speciales, $methode_paiement, $date_reservation, $chambre_id, $client_id, $prix, $actions = 1){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO reservations VALUES(null, :reference, :date_arrivee, :date_depart, :nombre_nuits, :nombre_personnes, :demandes_speciales, :methode_paiement, :date_reservation, :chambre_id, :client_id, :prix, :actions)");
        return $q->execute([
            "reference" => $reference,
            "date_arrivee" => $date_arrivee,
            "date_depart" => $date_depart,
            "nombre_nuits" => $nombre_nuits,
            "nombre_personnes" => $nombre_personnes,
            "demandes_speciales" => $demandes_speciales,
            "methode_paiement" => $methode_paiement,
            "date_reservation" => $date_reservation,
            "chambre_id" => $chambre_id,
            "client_id" => $client_id,
            "prix" => $prix,
            "actions" => $actions
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function mesReservations($client_id){
    global $db;
    try {
        $q = $db->prepare("
            SELECT 
                r.*, 
                c.nom AS chambre_nom, 
                c.prix, 
                r.date_arrivee, 
                r.date_depart, 
                r.nombre_nuits, 
                r.nombre_personnes, 
                r.demandes_speciales, 
                r.methode_paiement, 
                r.actions, 
                r.reference, 
                r.date_reservation, 
                u.prenom AS client_prenom, 
                u.nom AS client_nom
            FROM reservations r
            JOIN chambres c ON r.chambre_id = c.id
            JOIN users u ON r.client_id = u.id
            WHERE r.client_id = :client_id
            ORDER BY r.date_reservation DESC

        ");
        $q->execute([
        "client_id" => $client_id,
]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return [];
    }
}


function recupererToutesLesReservations(){
    global $db;
    try {
        $q = $db->prepare("
            SELECT 
                r.*,
                c.nom AS chambre_nom,
                c.prix,
                r.date_arrivee,
                r.date_depart,
                r.nombre_nuits,
                r.nombre_personnes,
                r.demandes_speciales,
                r.methode_paiement,
                r.actions,
                r.reference,
                r.date_reservation,
                u.prenom AS client_prenom,
                u.nom AS client_nom,
                u.email AS email
            FROM reservations r, chambres c , users u
            WHERE r.chambre_id = c.id AND r.client_id = u.id
            ORDER BY r.date_reservation DESC
        ");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function changerStatutReservation($id, $statut){
    global $db;
    try {
        $q = $db->prepare("UPDATE reservations SET actions=:statut WHERE id=:id");
        return $q->execute([
            "statut" => $statut,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function changerStatutChambre($chambre_id, $statut){
    global $db;
    try {
        $q = $db->prepare("UPDATE chambres SET disponible=:statut WHERE id=:chambre_id");
        return $q->execute([    
            "statut" => $statut,
            "chambre_id" => $chambre_id
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function recupererUneReservation($id){
    global $db;
    try {
        $q = $db->prepare("
            SELECT
                r.*,
                c.nom AS chambre_nom,
                c.prix,
                r.date_arrivee,
                r.date_depart,
                r.nombre_nuits,
                r.nombre_personnes,
                r.demandes_speciales,
                r.methode_paiement,
                r.actions,
                r.reference,
                r.date_reservation,
                u.prenom AS client_prenom,
                u.nom AS client_nom,
                u.email AS email
            FROM reservations r
            JOIN chambres c ON r.chambre_id = c.id
            JOIN users u ON r.client_id = u.id
            WHERE r.id = :id
        ");
        $q->execute([   
            "id" => $id
        ]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return null;
    }   
}


function modifierUneReservation($id, $date_arrivee, $date_depart, $nombre_nuits, $nombre_personnes, $demandes_speciales, $methode_paiement, $chambre_id, $client_id, $actions){
    global $db;
    try {
        $q = $db->prepare("UPDATE reservations SET date_arrivee=:date_arrivee, date_depart=:date_depart, nombre_nuits=:nombre_nuits, nombre_personnes=:nombre_personnes, demandes_speciales=:demandes_speciales, methode_paiement=:methode_paiement, chambre_id=:chambre_id, client_id=:client_id, actions=:actions WHERE id=:id");
        return $q->execute([
            "date_arrivee" => $date_arrivee,
            "date_depart" => $date_depart,
            "nombre_nuits" => $nombre_nuits,
            "nombre_personnes" => $nombre_personnes,
            "demandes_speciales" => $demandes_speciales,
            "methode_paiement" => $methode_paiement,
            "chambre_id" => $chambre_id,
            "client_id" => $client_id,
            "actions" => $actions,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function ajouterReservationDestination($date_heure, $id_destination, $pays_depart, $personnes, $enfants, $demandes_speciales, $methode_paiement, $statuts, $id_client){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO reservationpays VALUES(null, :date_heure, :id_destination, :pays_depart, :personnes, :enfants, :demandes_speciales, :methode_paiement, :statuts, :id_client)");
        return $q->execute([
            "date_heure" => $date_heure,
            "id_destination" => $id_destination,
            "pays_depart" => $pays_depart,
            "personnes" => $personnes,
            "enfants" => $enfants,
            "demandes_speciales" => $demandes_speciales,
            "methode_paiement" => $methode_paiement,
            "statuts" => $statuts,
            "id_client" => $id_client
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function changerStatutReservationDestination($id, $statut){
    global $db;
    try {
        $q = $db->prepare("UPDATE reservationpays SET statuts=:statut WHERE id=:id");
        return $q->execute([
            "statut" => $statut,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function changerStatutDestination($id_destination, $statut){
    global $db;
    try {
        $q = $db->prepare("UPDATE destinations SET actions=:statut WHERE id=:id_destination");
        return $q->execute([
            "statut" => $statut,
            "id_destination" => $id_destination
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
        return false;
    }
}


function recupererToutesLesReservationsDestinations() {
    global $db;
    try {
        $q = $db->prepare("
            SELECT 
                rp.*,
                d.nom AS destination_nom,
                d.prix,
                rp.date_heure,
                rp.personnes,
                rp.enfants,
                rp.demandes_speciales,
                rp.methode_paiement,
                rp.statuts,
                rp.actions,
                rp.client_id,
                u.prenom AS client_prenom,
                u.nom AS client_nom,
                u.email AS email
            FROM reservationspays rp
            JOIN destinations d ON rp.destination_id = d.id
            JOIN users u ON rp.client_id = u.id
            ORDER BY rp.date_heure DESC
        ");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function recupererUneReservationDestination($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM reservationpays WHERE id =:id");
        $q->execute([
            "id" => $id
        ]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function modifierUneReservationDestination($id, $date_heure, $id_destination, $pays_depart, $personnes, $enfants, $demandes_speciales, $methode_paiement, $statuts, $id_client){
    global $db;
    try {
        $q = $db->prepare("UPDATE reservationpays SET date_heure=:date_heure, id_destination=:id_destination, pays_depart=:pays_depart, personnes=:personnes, enfants=:enfants, demandes_speciales=:demandes_speciales, methode_paiement=:methode_paiement, statuts=:statuts, id_client=:id_client WHERE id=:id");
        return $q->execute([
            "date_heure" => $date_heure,
            "id_destination" => $id_destination,
            "pays_depart" => $pays_depart,
            "personnes" => $personnes,
            "enfants" => $enfants,
            "demandes_speciales" => $demandes_speciales,
            "methode_paiement" => $methode_paiement,
            "statuts" => $statuts,
            "id_client" => $id_client,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function ajouterUnBlog($titre, $auteur, $description, $date, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO blogs VALUES(null, :titre, :auteur, :description, :date, :image)");
        return $q->execute([
            "titre" => $titre,
            "auteur" => $auteur,
            "description" => $description,
            "date" => $date,
            "image" => $image
        ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function listeDesBlogs(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM blogs");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function recupererUnBlog($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM blogs WHERE id =:id");
        $q->execute([
            "id" => $id
        ]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function modifierUnBlog($id, $titre, $auteur, $description, $date, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE blogs SET titre =:titre, auteur =:auteur, description =:description, date =:date, image =:image WHERE id =:id");
        return $q->execute([
            "titre" => $titre,
            "auteur" => $auteur,
            "description" => $description,
            "date" => $date,
            "image" => $image,
            "id" => $id
         ]);
    } catch (PDOException $e) {
        setmessage("Erreur: " . $e->getMessage() . " à la ligne " . __LINE__, "danger");
    }
}


function supprimerUnBlog($idblogs){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM chambres WHERE id =:idblogs");
        return $q->execute([
            "idblogs" => $idblogs
        ]);
    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}


function dateChambreReservee($id){
    global $db;
    try {
        $q = $db->prepare("SELECT date_depart
        FROM chambres c, reservation r
        WHERE c.id = r.chambre_id AND c.id = :id
        ORDER BY c.id DESC");
    $q->execute([
        "id" => $id
    ]);

    return $q->fetch(PDO::FETCH_OBJ);

    }catch (PDOException $e) {
        setmessage ("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}