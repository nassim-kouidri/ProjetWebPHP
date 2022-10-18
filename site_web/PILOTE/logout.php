<?php
  // Initialiser la session
  session_start();
  
  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de connexion
    header("Location: http://localhost/web/ACCUEIL/site_web/Verification.php");
  }
?>