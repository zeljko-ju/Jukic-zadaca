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
          $x = isset($_GET['x']) ? $_GET['x'] : 3; 
          $y = isset($_GET['y']) ? $_GET['y'] : 3; 
          

          ?>
          <form action="" method="get">
          <label for="x">redovi</label>
          <input type="number" id="x" name="x" value=<?=$x?>>
          <label for="y">stupci</label>
          <input type="number" id="y" name="y" value=<?=$y?>>
          

          <input type="submit" value="Predaj">
          <form/>
          <?php
         //obrada
          $min = 0;
          $matrix=[[]];
          $redStart=$x-1;
          $stupacStart=$y-1;
          $redKraj=0;
          $stupacKraj=0;
          $start=1;
          
          

          while($stupacStart<=$stupacKraj && $redStart<=$redKraj){
            for($i=$redstart;$i<=redKraj;$i++){
            $matrix[$stupacStart][$i]=$start++;
          }
            $redPocetak--;
            if($start > $x*$y)
            break;
          }
         
         
         
         
         /*
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
*/
?>

        </div>
      </div>
    </div>
    <!-- End tijelo -->

    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>