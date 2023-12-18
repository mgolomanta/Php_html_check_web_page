<?php require_once 'check.php';?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>BET223 Tirage millionnaire - CAN23</title>

  </head>

  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
          <img src="bet223.jpg" class="me-2 img-circle" height="40" width="60"
            alt="BET223 Logo" loading="lazy" />
          <small>BET223 - CAN223 Millionnaire tirage</small>
      </div>
    </nav>
      
    <div class="container-fluid">
       <div class="row ">
          <div class="col-xs-12 col-md-3 col-lg-3" >
            <div class="card">
                  <div class="card-header hds">
                    Veilleuz renseigner uniquement l'un des champs ci-dessous !
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <form method="post">  
                          <div class="form-group">
                              <label for="id">Entrer l'ID de votre ticket :</label>
                              <input type="text" class="form-control" id="id" name="id" value=<?php if( isset($id) && !empty($id)){echo htmlentities($id);}?>>
                          </div>
                          
                          <div class="form-group">
                            <label for="date">Ou Rechercher le résultat du tirage d'une date :</label>
                            <input class="form-control" type="date"  name="date" id="date" value=<?php if( isset($date) && !empty($date)){echo htmlentities($date);}?>>
                          </div>
                          </br>
                          <button type="submit" class="btn btn-primary" name="submit">Vérifier</button>
                      </form>
                      
                    </blockquote>
                  </div>
                  <div class="card-header bts">
                    BET223 - CAN223 - TIRAGE
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-md-6 mt-2" >
            <? if (isset($pls) && !empty($pls)): ?>
                <strong><?=$pls ?></strong> 
            <? endif; ?>
            </br> </br>
              <p class="card-text font-monospace">Bienvenue sur la plateforme de vérification du résultat du tirage millionnaire CAN23 de BET223.</p>
              <?php 
                if (isset($got_ticket) && !empty($got_ticket)){
                  echo $got_ticket;
                }elseif(isset($notgot_ticket) && !empty($notgot_ticket)){ 
                  echo $notgot_ticket;
                }elseif(isset($ticCorresp) && !empty($ticCorresp)){ 
                  echo $ticCorresp;
                  }elseif(isset($not_datefind) && !empty($not_datefind)){ 
                    echo $not_datefind;
                  }?>       

          </div>
          <div class="col-xs-12 col-md-3" ></div>
          
      </div>
    </div>

    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>