<!--

// Ispišite tablicu 3 x 3 na način
// da u ćelijama kuteva stavite znak X

// DZ: Napraviti da radi za bilo koja dva unesena broja
//     Putem GET metode
/*
echo '<table border="3" style="background-color: rgba(55, 75, 120, .4)">';
for($i=0;$i<=2;$i++){
    echo '<tr>';
    for($j=0;$j<=2;$j++){
        echo '<td>';
        if(
            ($i===0 && $j===0)
            ||
            ($i===0 && $j===2)
            ||
            ($i===2 && $j===0)
            ||
            ($i===2 && $j===2)        ){
            echo 'X';
        }else{
            echo '&nbsp;';
        }
        '</td>';
    }
    echo '</tr>';

}
echo '</table>';*/
-->
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
            $brojredova = isset($_GET['brojredova']) ? $_GET['brojredova'] : '0';
            $brojstupaca = isset($_GET['brojstupaca']) ? $_GET['brojstupaca'] : '0';
            ?>
          <form action="" method="get">
          <input 
            placeholder="broj redova"
            type="number" id="brojredova" name="brojredova" value="<?=$brojredova?>" />
            <input 
            placeholder="broj stupaca"
            type="number" id="brojstupaca" name="brojstupaca" value="<?=$brojstupaca?>" />
            <input type="submit" value="predaj">
            
            
            

          </form>
          
         
        </div>
        <?php
            echo '<table border="9" style="background-color: rgba(255, 5, 120, .8)">';
        for($i=0;$i<=$brojredova-1;$i++){
        echo '<tr>';
         for($j=0;$j<=$brojstupaca-1;$j++){
            echo '<td>';
            if(
                ($i===0 && $j===0)
                ||
                ($i===0 && $j===$brojstupaca-1)
                ||
                ($i===$brojredova-1 && $j===0)
                ||
                ($i===$brojredova-1 && $j===$brojstupaca-1)       ){
                echo 'X';
            }else{
                echo '&nbsp;';
            }
            '</td>';
        }
        echo '</tr>';
    
    }
    echo '</table>';
    ?>
      </div>
     
    </div>
    

    <!-- End tijelo -->
    <?php require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>

