<?php

$ime=isset($_GET['ime'])?$_GET['ime'] : '';

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
        
        <form action="" method="get">
        <label for="ime">Ime</label>
        <input type="text" name="ime" ID="ime">

        <!-- foundation praksa-->
        <label >iznos <input type="number"
        name="iznos">


        </label>
        <label for="boja">boja
            <input type="color" name="boja" ID="boja"/>
        </label>

        <label for="datum">datum
            <input type="date" id="datum" name="datum">
        </label>

        <!--odabiri-->
        <p>jednostruki odabir</p>
        <input type="radio" id="ljeto" name="gd" value="1" />
        <label for="ljeto">ljeto</label>

        <input type="radio" id="zima" name="gd" value="2" />
        <label for="zima">zima</label>
        <input type="submit" class="alert button expanded"  value="predaj">

        <p>višestruki odabir</p>
        <input type="checkbox" name="gdd" id="proljeće" name="vo[]" value="1">
        <label for="proljeće">proljeće</label><br />
        <input type="checkbox" name="gdd" id="jesen" name="vo[]" value="2">
        <label for="jesen">jesen</label><br />
        <input type="checkbox" name="gdd" id="zima" name="vo[]" value="3">
        <label for="zima">zima</label>
        
        </form>

        <pre>
            <?php 
            var_dump($_GET);

            ?>
            </pre>


        </div>
      </div>
    </div>
    <!-- End tijelo -->
    <?php require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>