<?php
$x=isset($_GET['x'])? $_GET['x']: ' ';
$y=isset($_GET['y'])? $_GET['y']: ' ';
$z=isset($_GET['z'])? $_GET['z']: ' ';

?>

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
          <h4>program će od 3 broja izbaciti onaj sa najvećom vrijednosti</h4>
        <?php 
         // ulaz
          // GET parametar x i y
          $x = isset($_GET['x']) ? $_GET['x'] : 0; 
          $y = isset($_GET['y']) ? $_GET['y'] : 0; 
          $z = isset($_GET['z']) ? $_GET['z'] : 0;

          ?>
          <form action="" method="get">
          <label for="x">broj 1</label>
          <input type="number" id="x" name="x" value=<?=$x?>>
          <label for="y">broj 2</label>
          <input type="number" id="y" name="y" value=<?=$y?>>
          <label for="z">broj 3</label>
          <input type="number" id="z" name="z" value=<?=$z?> >

          <input type="submit" value="Predaj">




          </form>
          <pre>
          <?php
         
          if($x > $y && $x > $z ){
            echo $x;
        }else if($y > $x && $y > $z) {
            echo $y;
        
        }else {
            echo $z;
        }
          ?>
          </pre>
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