<?php session_start()?>
<!DOCTYPE html>

<html lang="en">
<?php if (isset($_SESSION['ROLE'])):

    ?>
    <?php if ($_SESSION['ROLE'] == "Admin"):

    ?>
 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gestion des utilisateurs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css" href="delegue.css">
</head>

<body>



<!-- Navigation -->
<?php include ("MoteurTemplate/header.php") ?>

  <!-- Page Content -->

<div class="container-fluid one">
    <h1 class="my-4">Autorisation du delegué </h1> <br>

   <div class="container two"> <!-- Fonctionalites -->   
           <div class="row justify-content-around custom-line ">


         <div class=" align-self-start col-sm-6 bg-dark  text-white" id=test-a> <br>  <!-- Ajouter une entreprise -->   
              <h4 class="ctitle">Autorisation delegué </h4><br>

                <div class="form-group">
                   <form action="" method="post">
                       <div class="form-check form-switch">
                     <input class="form-check-input" type="checkbox" id="flexSwitchCheckDe">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Creer une entreprise</label>
                    </div>
                  <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchChec" >
               <label class="form-check-label" for="flexSwitchCheckChecked">  Modifier une entreprise</label>
                </div>
                     <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" >
                          <label class="form-check-label" for="flexSwitchCheckDisabled">Supprimer une entreprise</label>
                                </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecke" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Creer une offre</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Modifier une offre</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Supprimer une offre</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Creer un compte etudiant</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Modifier un compte etudiant</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Supprimer un compte etudiant </label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Creer un compte pilote</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Modifier un compte pilote</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Supprimer un compte pilote</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Creer un compte delegué</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Modifier un compte delegué</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Supprimer un compte delegué</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Informer le système de l'avancement de la candidature step 3</label>
                         </div>
                         <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Informer le système de l'avancement de la candidature step 4</label>
                         </div><br>
                

                             <button type="submit" name="ajout" class="btn btn-primary">Confirmer</button><br>
                    </form>          
                </div>          
         </div>       
                    
     
   
     </div>  <!-- row -->




   </div><br> <br> <br>  <!-- container two -->      
            
               


</div> <!-- /fermeture container one -->           


  <!-- Bootstrap core JavaScript -->

  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <script>
 document.getElementById(test-a).style.display = block;
</script>
<?php include ("MoteurTemplate/footer.php") ?>
</body>

     <?php endif;

    ?>
    <?php else:?> Erreur <br><a href="http://localhost/web/ACCUEIL/acceuil_principale.php"> Rentournez a la page d'accueil.</a>
    <?php endif;  ?>

</html>