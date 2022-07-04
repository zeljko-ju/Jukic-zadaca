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
         Izračun:
         x=++y;
         y+= ++x;
         izlistava zbroj x+y
         <?php
         
         $x = isset($_GET['x']) ? $_GET['x']: 0;
         $y = isset($_get['y']) ? $_get['y']: 0;
         ?>
         <form action="" method="get">
        <label>
            x
            <input type="text" name="x" value="<?=$x?>">
        </label>
        <label>
            y
            <input type="text" name="y" value="<?=$y?>">
        </label>

        <input class="success button expanded" type="submit" value="Izračunaj">

         </form>
         <?php

           $x=++$y;
           $y += ++$x;

           echo $y+ $x;
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