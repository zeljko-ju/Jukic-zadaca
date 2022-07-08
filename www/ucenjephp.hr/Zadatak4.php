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
            <?php
          $a= isset($_GET['a'])?$_GET['a']:0;
          $b= isset($_GET['b'])?$_GET['b']:0;
          $c= isset($_GET['c'])?$_GET['c']:0;
          $d= isset($_GET['d'])?$_GET['d']:0;
        ?>

        <form action="" method="get">
            <label for="a"> a 
                <input type="number" name="a" ID="a" value="<?=$a?>">
            </label>
            <label for="b"> b 
                <input type="number" name="b" ID="a" value="<?=$b?>">
            </label>
            <label for="c"> c 
                <input type="number" name="c" ID="c" value="<?=$c?>">
            </label>
            <label for="d"> a 
                <input type="number" name="d" ID="d" value="<?=$d?>">
            </label>
            <input type="submit" value="Izračunaj">
        </form>

        <?php
        #obrada
        $rez=($a+$b)*($c+$d);
        echo $rez;
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