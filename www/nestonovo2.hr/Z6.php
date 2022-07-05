<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
        <?php


// Stranica prima cijeli broj.
// ako je broj paran boja stranice treba biti zelena
// inač treba biti crvena

        $x = isset($_GET['x']) ? $_GET['x'] : 1; 

        if($x%2 ===0){
        echo '<body style="background-color:green;>';
            }else {
              echo '<body style="background-color:red;>';
            }
            ?>
        </div>
      </div>
    </div>
    <!-- End tijelo -->
    <?php 
   
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>