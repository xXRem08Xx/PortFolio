<?php
include_once "bdd_connexion.php";
$nomPrenom = $_GET[''];
$message = $_GET[''];
$adresseMail = $_GET[''];

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
