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
        <div class="alert callout">
        <p> Stranica prima 3 GET parametra koji su cjeli brojevi
// stranica ispisuje najveći primljeni broj</p>
            <?php
          $a= isset($_GET['a'])?$_GET['a']:0;
          $b= isset($_GET['b'])?$_GET['b']:0;
          $c= isset($_GET['c'])?$_GET['c']:0;
          
        ?>

        <form action="" method="get">
            <label for="a"> prva vrijednost
                <input type="number" name="a" ID="a" value="<?=$a?>">
            </label>
            <label for="b"> druga vrijednost
                <input type="number" name="b" ID="a" value="<?=$b?>">
            </label>
            <label for="c"> treća vrijednost
                <input type="number" name="c" ID="c" value="<?=$c?>">
            </label>
           
         <input type="submit" value="Izračunaj">
        </form>

        <?php
        #obrada
       if($a>$b && $a>$c){
        echo 'najveći broj je: ', $a;
       }else if($b>$a && $b>$c){
        echo 'najveći broj je: ', $b;
       }else {
        echo 'najveći broj je: ', $c;
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