$najveci = PHP_INT_MIN; 
foreach($_GET as $b){
    if($b>$najveci){
        $najveci=$b;
    }
}
echo $najveci;

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
          <form action="" method="get">
            <?php $najveci = PHP_INT_MIN; ?>
<?php

$x = isset($_GET['x']) ? $_GET['x'] : 2; 
$y = isset($_GET['y']) ? $_GET['y'] : 5; 
$z = isset($_GET['z']) ? $_GET['z'] : 504; 

if($x > $y && $x > $z ){
    echo $x;
}else if($y > $x && $y > $z) {
    echo $y;

}else {
    echo $z;
}?>
          </form>
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