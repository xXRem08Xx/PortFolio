<?php
include_once "bdd_connexion.php";
$nomPrenom = $_GET['name'];
$message = $_GET['message'];
$adresseMail = $_GET['email'];

//dans le cadre ou on a un server mail (a completer )
/*
// Le message
$message = "Salut, ceci est un exemple de message pour tester la fonction mail de php !";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('maissa.rem08@gmail.com', 'Contact PortFolio', $message);
*/
//sinon on enregistre dans la base de données
//on verifie que les champs existes
if (isset($message, $nomPrenom, $adresseMail)) {
    //on recupere tous les commentaires du jour correspondant au document datant de mois  de 10 min
    $requeteInformationGlobal = 'SELECT * FROM contact WHERE TIMEDIFF(now(), datePost) < "00:10";';
    $resultatInformation = $pdo->query($requeteInformationGlobal);
    $resultatInformation = $resultatInformation->fetchAll();

    //pour chaque resultat
    foreach ($resultatInformation as $contact) {
        //si les info du formContact corresponde a celui de la base
        if ($contact['nom_prenom'] == $nomPrenom || $contact['message'] == $message || $contact['mail'] == $adresseMail) {
            //on indique que le form est deja present
            $errorMessagePresent = true;
        }
    }

    //si il n'y a pas d'eereur
    if ( !$errorMessagePresent) {

        $requeteInsertion = $pdo->prepare("INSERT INTO `contact`(`nom_prenom`, `mail`, `message`) VALUES (:nomPrenom, :mail, :message);");
        $requeteInsertion->bindParam(':nomPrenom', $nomPrenom);
        $requeteInsertion->bindParam(':mail', $adresseMail);
        $requeteInsertion->bindParam(':message', $message);
        
        //on fait la verif des insertions de balise < et >
        $boolMessageBaliseEntree = preg_match("#<#", $message);
        $boolMessageBaliseFermer = preg_match("#>#", $message);
        
        $boolNomBaliseEntree = preg_match("#<#", $nomPrenom);
        $boolNomBaliseFermer = preg_match("#>#", $nomPrenom);

        $boolEmailBaliseEntree = preg_match("#<#", $adresseMail);
        $boolEmailBaliseFermer = preg_match("#>#", $adresseMail);

        //on verifie si le message comporte au moins 2 caracteres et que l'on a pas trouvé de balise fermante
        if (!(strlen($message) < 2 || $boolMessageBaliseEntree || $boolMessageBaliseFermer || $boolNomBaliseEntree || $boolNomBaliseFermer || $boolEmailBaliseEntree || $boolEmailBaliseFermer)) {
            $requeteInsertion->execute();
        }
    };
};
if ($errorMessagePresent) {

    header('Location: ./contact.php?etat=false');
}
else {
    header('Location: ./contact.php');
}
exit();
