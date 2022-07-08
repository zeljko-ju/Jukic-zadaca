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
            <h3>Program će dva unesena broja zbrojiti, pomnožiti sa 50 i uvećati za 10 </h3>
                <?php
                #ulaz
                $x=isset($_GET['x'])?$_GET['x']:0;
                $y=isset($_GET['x'])?$_GET['x']:0;

                ?>

                <form action="" method="get">
                    <label>x
                        <input type="text" name="x" id="x" value="<?=$x?>">
                    </label>
                    <label>y
                        <input type="text" name="y" id="y" value="<?=$y?>">
                    </label>
                    <input class="warning button expanded" type="submit" value="Predaj">
                </form>

                <?php
                    $r=$x+$y;
                    $r *=50;
                    $r+=10;
                    echo $r;



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