<?php session_start(); ?>
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
        <link rel="stylesheet" type="text/css" href="simple.css">
        
    </head>

    <body>
            
<?php include ("MoteurTemplate/header.php") ?>
 

<div class="container-fluid one">
<div class="container">
  <span class="text1">Bienvenue sur</span>
  <span class="text2">student internship</span>
</div>
</div>

<div class="container-fluid three">
        <div class="container two">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                  <!--Rôles-->

                  <div class="col">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                      <h3 class="my-0 fw-normal">Rôle</h3>
                    </div>
                    <div class="card-body longueur2">
                      <h5>Gestion des rôles</h5>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>•	Administrateur</li>
                        <li>•	Délégué</li>
                        <li>•	Pilote de promotion</li>
                        <li>•	Etudiant</li>
                      </ul>
                      <button type="button"  id="button2" onclick="window.location.href = 'http://localhost/web/ACCUEIL/site_web/ADMIN/accueil_utilisateur.php';" class="w-100 btn btn-lg btn-primary">Gérer</button>
                    </div>
                  </div>
                  </div>
              <!--Entreprise-->
    <div class="col">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h3 class="my-0 fw-normal">Entreprise</h3>
        </div>
        <div class="card-body longueur2">
          <h5>Gestion des Entreprises</h5>
          <ul class="list-unstyled mt-3 mb-4">
            <li>•	Rechercher</li>
            <li>•	 Ajouter</li>
            <li>•	 Evaluer </li>
          </ul>
          <button type="submit" id="button2" onclick="window.location.href = 'http://localhost/web/ACCUEIL/site_web/ADMIN/gestion_entreprise/index.html';" class="w-100 btn btn-lg btn-primary">Gérer</button>

        </div>
      </div>
      </div>
              <!--Offre-->
    <div class="col">
        <div class="card mb-4 shadow-sm ">
        <div class="card-header ">
          <h3 class="my-0 fw-normal ">Offre</h3>
        </div>
        <div class="card-body longueur3">
          <h5>Gestion des offres</h5>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Décrochez votre futur stage, alternance grâce à des centaines d'offres de stage</li>
                  
          </ul>
          <button type="button"  id="button3" onclick="window.location.href = 'http://localhost/web/ACCUEIL/site_web/ADMIN/gestion_offre/index.html';" class="w-100 btn btn-lg btn-primary">Gérer</button>
        </div>
      </div></div>
              <!--////////////////-->
      <div class="col">
        <div class="card mb-4 shadow-sm ">
        <div class="card-header ">
          <h3 class="my-0 fw-normal ">Candidatures</h3>
        </div>
        <div class="card-body longueur4">
          <h5>Gestion des candidatures</h5>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Difficile de gérer l'arrivée de dizaines de CV ? Verifiez les candidatures</li>
            
          </ul>
            <button type="button"  id="button4" class="w-100 btn btn-lg btn-primary">Gérer</button>
        </div>
      </div>
      </div></div>
            </div>
          </div>
        </div>

      </div>

<?php include ("MoteurTemplate/footer.php")
?>

    </body>
    <?php endif;

    ?>
    <?php else:?> Erreur <br><a href="http://localhost/web/ACCUEIL/acceuil_principale.php"> Rentournez a la page d'accueil.</a>
    <?php endif;  ?>
</html>