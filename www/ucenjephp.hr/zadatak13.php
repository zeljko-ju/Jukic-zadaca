<?php
$a = isset($_GET['a']) ? $_GET['a'] : '0';
$b = isset($_GET['b']) ? $_GET['b'] : '0';
$c = isset($_GET['c']) ? $_GET['c'] : '0';
// Složiti post formu koja prima tri cijela broja 
// i ispisuje najveći
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
        <div class="success callout">
         Od 3 cijela unesena broja dobit ćemo najveći
         


         <form action="" method="post">
          <label for="a">prva vrijednost</label>
          <input type="number" ID="a" name="a" value="<?=$a?>">

          <label for="b">prva vrijednost</label>
          <input type="number" ID="b" name="b" value="<?=$b?>">

          <label for="c">prva vrijednost</label>
          <input type="number" ID="c" name="c" value="<?=$c?>">
          <input type="submit" value="predaj">
          </form>
          
          
          
         
          <?php
          $a = isset($_POST['a']) ? $_POST['a'] : '0';
          $b = isset($_POST['b']) ? $_POST['b'] : '0';
          $c = isset($_POST['c']) ? $_POST['c'] : '0';
        
        
          if($a>$b && $a > $c){
            echo $a;
          }else if ($b>$a && $b>$c){
            echo $b;
          }else{
            echo $c;
          }

          ?>





        </div>
      </div>
    </div>
    <!-- End tijelo -->
    <?php require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>