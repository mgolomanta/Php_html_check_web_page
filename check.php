<?php 
session_start();
$tirage = array("2024-01-01" => "2023123", "2024-01-02" => "2023124", "2024-01-13" => "21227464", "2023-12-13" => "21230626");

if ( isset($_SESSION["close"]) && $_SESSION["close"] == 0){
  //header("location: index.php?identifiez-vous");
  session_destroy();
  exit();
}
$_SESSION["test"] = -1;

$pls ="";
  if ( isset($_POST["submit"]) && ( (empty($_POST["id"]) && empty($_POST["date"])) || (!empty($_POST["id"]) && !empty($_POST["date"])) ) ){
    $pls = "<div class=\"alert alert-danger\">Veilleuz remplir l'un des champs uniquemment et reéssayer!</div>";
  }elseif ( isset($_POST["submit"]) && !empty($_POST["id"]) || !empty($_POST["date"]) ){
         $id =  htmlspecialchars(trim($_POST["id"]));
         $date =  htmlspecialchars(trim($_POST["date"]));
         // find ticket
        if(!empty($id)){
            foreach ($tirage as $key => $value) {
                if($value === $id){
                    $got_ticket =  "<div class=\"card\">
                    <div class=\"card-header\">
                      Résultat
                    </div>
                    <div class=\"card-body\">
                      <blockquote class=\"blockquote mb-0\">
                        <p>Votre ticket : $id est le ticket gagnant pour le tirage du $key !</p>
                        <footer class=\"blockquote-footer\">BET223 <cite title=\"Source Title\">- Tirage millionnaire</cite></footer>
                      </blockquote>
                    </div>
                  </div>";
              }else{
                $notgot_ticket="<div class=\"card\">
                    <div class=\"card-header\">
                      Résultat
                    </div>
                    <div class=\"card-body\">
                      <blockquote class=\"blockquote mb-0\">
                        <p>Désolé, votre ticket : $id n'est pas un ticket gagnant!</p>
                        <footer class=\"blockquote-footer\">BET223 <cite title=\"Source Title\">- Tirage millionnaire</cite></footer>
                      </blockquote>
                    </div>
                  </div>";
            }  
          }  
        }else{//find date
          foreach ($tirage as $key => $value) {
            if($key === $date){
                $ticCorresp="<div class=\"card\">
                    <div class=\"card-header\">
                      Résultat
                    </div>
                    <div class=\"card-body\">
                      <blockquote class=\"blockquote mb-0\">
                        <p>Pour la date : $date le ticket : $value est le ticket gagnant!</p>
                        <footer class=\"blockquote-footer\">BET223 <cite title=\"Source Title\">- Tirage millionnaire</cite></footer>
                      </blockquote>
                    </div>
                  </div>";
          }else{
            $not_datefind="<div class=\"card\">
                      <div class=\"card-header\">
                        Résultat
                      </div>
                      <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                          <p>Désole!, il n'y a pas eu du tirage pour la date : $date ; veilleuz selectionner une autre date!</p>
                          <footer class=\"blockquote-footer\">BET223 <cite title=\"Source Title\">- Tirage millionnaire</cite></footer>
                        </blockquote>
                      </div>
                    </div>";
          }  
        }  

      }  
}    

?>