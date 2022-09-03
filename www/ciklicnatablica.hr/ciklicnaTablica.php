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
         




echo '<hr />';
        $rows=$_GET['x'];
        $columns=$_GET['y'];

            $maxRow=$rows-1;
            $maxColumn=$columns-1;
            $start=1;
            $matrix=[];
            $minColumn=0;
            $minRow=0;
            while ($start <= $rows*$columns) 
            {
                for($j=$maxColumn; $j >= $minColumn; $j--)
                {
                    $matrix[$maxRow][$j] = $start++;
                }
                    $maxRow--;
                    
                    if ($start > $rows*$columns) 
                    break;




                for ($i=$maxRow; $i >= $minRow ;$i--) 
                { 
                    $matrix[$i][$minColumn] = $start++;
                }
                    $minColumn++;
                    if ($start > $rows*$columns) 
                    break;

                for ($j=$minColumn; $j <= $maxColumn; $j++) 
                { 
                    $matrix[$minRow][$j] = $start++;
                }
                    $minRow++;
                    if ($start > $rows*$columns) break;
                for ($i=$minRow; $i <= $maxRow; $i++) 
                { 
                    $matrix[$i][$maxColumn] = $start++;
                }
                    $maxColumn--;    
            
            }
//izlaz
            echo '<table border="3">';
            for($i=0;$i<$x;)
                    {
                      echo '<tr>';
                        for ($j=0; $j < $y;) 
                        { 
                          echo '<td>'. $matrix[$i][$j] .'</td>';
                          $j++;
                        }
                        echo '</tr>';
                        $i++;
                    } 
            
            echo '</table>';
            

?>

        </div>
      </div>
    </div>
    <!-- End tijelo -->

    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>