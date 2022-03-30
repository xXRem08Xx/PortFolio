<?php
try {
  $user = "rmaissa";
  $mdp = "elini01";
  $pdo = new PDO('mysql:host=172.28.100.3;dbname=rmaissa_portfolio;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    
      print 'Erreur fatale : ' . $e->getMessage() . "<br/>";
      die();
}
