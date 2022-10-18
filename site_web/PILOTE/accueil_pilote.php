<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exemple bootstr</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="accueil_pilote.css">
        
    </head>

    <body>
            
      <!--JS-->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!--JS-->
     

        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container bar">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Nos partenaires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#"><a href="logout.php">Please Click To Logout</a></a>
              </li>
            </ul>
            
          </div>
        </div>
        </nav>
 

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
                      <button type="button"  id="button2" onclick="window.location.href = 'http://localhost/web/PILOTE/gestion_utilisateur/index.html';" class="w-100 btn btn-lg btn-primary">Gérer</button>
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
          <button type="submit" id="button2" onclick="window.location.href = 'http://localhost/web/PILOTE/gestion_entreprise.php';" class="w-100 btn btn-lg btn-primary">Gérer</button>

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
          <button type="button"  id="button3" onclick="window.location.href = 'http://localhost/web/PILOTE/gestion_offre.php';" class="w-100 btn btn-lg btn-primary">Gérer</button>
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

<!-- Footer -->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
      <hr>
    </div>	
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
        <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
      </div>
      <hr>
    </div>	
  </div>
</section>
<!-- ./Footer -->

    </body>
</html>