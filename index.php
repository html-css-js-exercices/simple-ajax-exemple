<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <?php
  /**
   * Bootstrap
   * @link https://getbootstrap.com/docs/4.6/getting-started/introduction/
   */
  ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <title>Exemple requête Ajax</title>
</head>
<body>
  <div class="container">
    
    <h1>Exemple requête Ajax</h1>

    <div class="row">
      <div class="col-lg-12">
        <h3>Pour exécuter le miniserver php</h3>
        <p>Se rendre avec le terminal dans le dossier puis lancer la commande</p>
        <code>
          php -S localhost:8888
        </code>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <p>L'action ajax est déclenchée au click</p>
        <button class="btn btn-primary">Press me once only please  ;)</button>
        <div id="div1" class="py-5">Pas encore de click</div> 
      </div>
    </div>
  </div>
  
  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script>
    /** 
    * quand la page est chargée
    */
    $(document).ready(function(){
      /** 
      * action lancée au click
      */
      $("button").click(function(){
        
        $('#div1').empty();

        /**
        * lancer un requête vers le backend 
        * @link https://www.w3schools.com/jquery/ajax_ajax.asp
        */
        $.ajax({
          url: "ajax.php",
          method: 'POST',
          // data: {'licence':161323545}, // données que l'on retrouve dans $_POST
          success: function(result){
            $('#div1').append('Données dans la console, F12 ou click droit, inspecter');
            console.log(result);
          }
        });
        
      });
      
    });
  </script>
</body>
</html>
