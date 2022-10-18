<?php

$conn = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '');
//Getting Input value
session_start();
if(isset($_POST['submit'])){
  $username=$_POST['Pseudo'];
  $password=$_POST['Mot_De_Passe'];
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result = $conn->query("SELECT*FROM utilisateur_t WHERE Pseudo='$username' AND Mot_De_Passe='$password'");
 $row=$result->fetch();
 $count=$result->rowCount();
 if($count==1){
      $_SESSION['utilisateur_t']=array(
   'Pseudo'=>$row['Pseudo'],
   'Mot_De_Passe'=>$row['Mot_De_Passe'],
   'Typee'=>$row['Typee']
   );
      $_SESSION['ROLE'] = $row['Typee'];
      
   $role=$_SESSION['utilisateur_t']['Typee'];
   //Redirecting User Based on Role
    switch($role){
  case 'Admin':
  header('location:http://localhost/web/ACCUEIL/site_web/ADMIN/accueil_admin.php');
  break;
  case 'Pilote':
  header('location:http://localhost/web/ACCUEIL/site_web/PILOTE/accueil_pilote.php');
  break;
  case 'Etudiant':
  header('location:http://localhost/web/ACCUEIL/site_web/ETUDIANT/accueil_etudiant.php');
  break;
  case 'Delegue':
  header('location:http://localhost/web/ACCUEIL/site_web/DELEGUE/accueil_delegue.php');
  break;
 }
 }else{
 $error='Utilisateur ou mot de passe incorrect';
 }
}
}
?>


<!DOCTYPE html> 
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Connexion.css">
        <meta charset="utf-8">
        <title>Page de connexion</title>
    </head>
    <body> 
        <form method="POST" action="">
            <header>
                <img src="Image1.png" id="image" alt= "logo" />
                <h1 id="conn">Connexion</h1>
            </header> <br>
            <p>
                <label for="Pseudo"><b>Nom d'utilisateur :</b></label>  <br>
                <input type="login" placeholder="Entrer le nom d'utilisateur" name="Pseudo" required>
            </p>
            <p>
                <label for="Mot_De_Passe"> <b>Mot de passe :</b> </label> <br>
                <input type="password" placeholder="Entrer le mot de passe" name="Mot_De_Passe" required>
            </p>
            <input type="submit" id="submit" name="submit" value='Se connecter'>                <br>

            <?php
            if(isset($error)){ echo "<p style='color:red'>$error</p>"; }
               
            ?>
            
        </form>
     </body>
</html>

