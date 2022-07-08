<?php
$x=isset($_GET['x'])? $_GET['x']: ' ';
$y=isset($_GET['y'])? $_GET['y']: ' ';
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
        <?php 
         // ulaz
          // GET parametar x i y
          $x = isset($_GET['x']) ? $_GET['x'] : 0; 
          $y = isset($_GET['y']) ? $_GET['y'] : 0; 
          $z = isset($_GET['z']) ? $_GET['z'] : 0;

          ?>
          <form action="" method="get">
          <label for="x">redovi</label>
          <input type="number" id="x" name="x" value=<?=$x?>>
          <label for="y">stupci</label>
          <input type="number" id="y" name="y" value=<?=$y?>>
          

          <input type="submit" value="Predaj">
          <form/>
          <?php
         
          $min = 0;
          $start=1;
          
          echo '<table border="3">';
for($i=$min;$i<$x;$i++){
    echo '<tr>';
    for($j=$min;$j<$y;$j++){
        echo '<td>';if(
            
            
            ($i===$x-1 && $j===$y-1)
            
            )
      {
            echo $start;
        }else{
            echo '&nbsp;';
        }
        '</td>';
    }
    echo '<tr>';
}
echo '</table>';


echo '<hr />';
?>

        </div>
      </div>
    </div>
    <!-- End tijelo -->

    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>