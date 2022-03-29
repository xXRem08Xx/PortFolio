<?php
try {
  $user = "rmaissa";
  $mdp = "elini01";
  $pdo = new PDO('mysql:host=localhost;dbname=rmaissa_portfolio;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    
      print 'Erreur fatale : ' . $e->getMessage() . "<br/>";
      die();
}
