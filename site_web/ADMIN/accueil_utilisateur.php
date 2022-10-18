<?php session_start()?>
<!DOCTYPE html>
<html>
<?php if (isset($_SESSION['ROLE'])):

    ?>
    <?php if ($_SESSION['ROLE'] == "Admin"):

    ?>
    <head>
        <meta charset="utf-8">
        <title>exemple bootstr</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet"  href="utilisateur.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
            
<?php include ("MoteurTemplate/header.php") ?>

<div class="container-fluid one">
  
<div class="container">
  <span class="text1">Gestion des utilisateur</span>
 
</div>
</div>

<div class="container-fluid three">
        <div class="container two ">
           <div class="row  jus ">
                  <!--Rôles-->

                  <div class=" col-sm-5">
                    <div class="card ">
                      <div class="card-header">
                      <h3 class="my-0 fw-normal">Rôle</h3>
                      </div>
                    <div class="card-body longueur2">
                      <h5>Gestion des utilisateurs </h5>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>• Administrateur</li>
                     <li>• Delegué</li>
                        <li>• Pilote de promotion</li>
                        <li>• Etudiant</li>
                      </ul>
                      <button type="button"  id="button2" onclick="window.location.href = 'http://localhost/web/ACCUEIL/site_web/ADMIN/gestion_utilisateur/index.html';" class="w-100 btn btn-lg btn-primary">Gérer</button>
                    </div>
                  </div>
                  </div>
              <!--Entreprise-->
    <div class="col-sm-5">
      <div class="card  ">
            <div class="card-header">
            <h3 class="my-0 fw-normal">Delegué</h3>
          </div><br>
        <div class="card-body longueur2">
           <h5>Autorisation du delegué</h5>
            <ul class="list-unstyled mt-3 mb-4">
            <li>• Gerer les autorisation</li><br><br>

          </ul>
          <button type="submit" id="button2" onclick="window.location.href = 'http://localhost/web/ACCUEIL/site_web/ADMIN/delegue.php';" class="w-100 btn btn-lg btn-primary">Gérer</button>
      </div>    
     </div>  
  </div>
 
     
      

              <!--////////////////-->

            </div>
          </div>
        </div>


<!-- Footer -->
<?php include ("MoteurTemplate/footer.php") ?>

<!-- ./Footer -->
    <?php endif;

    ?>
    <?php else:?> Erreur <br><a href="http://localhost/web/ACCUEIL/acceuil_principale.php"> Rentournez a la page d'accueil.</a>
    <?php endif;  ?>
    </body>
</html>