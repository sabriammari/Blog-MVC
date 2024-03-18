<?php
// Function to return an instance of PDO object connected to your database
// For now each call to the function returns a new instance, later you'll learn to do better
function getPDO() {
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=blogMVC;charset=utf8', 'root', 'root');
  }
  catch (Exception $error) {
          die('Erreur : ' . $error->getMessage());
  }
  return $bdd;
}
?>
