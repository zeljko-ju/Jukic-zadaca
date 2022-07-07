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
          <h6>program će izbaciti vrijednost zbroja 3 broja nakon obavljanja sljedećih operacija: <br>
          z=x+ ++y <br>
          k=x + --z + y </h6>
        <?php 
         // ulaz
          // GET parametar x i y
          $x = isset($_GET['x']) ? $_GET['x'] : 0; 
          $y = isset($_GET['y']) ? $_GET['y'] : 0; 
          $z = isset($_GET['z']) ? $_GET['z'] : 0;

          ?>
          <form action="" method="get">
          <label for="x">x</label>
          <input type="number" id="x" name="x" value=<?=$x?>>
          <label for="y"></label>
          <input type="number" id="y" name="y" value=<?=$y?>>
          <label for="z">z</label>
          <input type="number" id="z" name="z" value=<?=$z?> >

          <input type="submit" value="Predaj">


          



          </form>
          <p>Rezultat:</p>
          
          <?php
          $z=$x+ ++$y;
          $k=$x + --$z + $y;
          echo $k+ $x + $y +$z;
          
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