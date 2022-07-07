<?php
$tekst=isset($_GET['tekst']) ? $_GET['tekst']: '';
$naslov=isset($_GET['naslov']) ? $_GET['naslov']: '1';
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
         <form action="" method="get">
          <label for="text">Tekst</label>
          <input type="text" id="tekst" name="tekst" value="<?=$tekst?>" />

          <label for="naslov">Naslov</label>
          <select name="naslov" id="naslov">
          <?php for($i=1;$i<=3;$i++): ?>
                    <option 
                    <?php 
                    if($naslov==$i){
                        echo 'selected="selected"';
                    }
                    ?>
                    value="<?=$i?>">
                        Naslov <?=$i?>
                    </option>
                <?php endfor;?>
            </select>
          <input
          class="success button expanded"
          type="submit" value="Predaj">

          <pre>
            <?php
            if(isset($_GET['naslov'])){
              echo '<h'.$naslov.'>'.$tekst.'</h'.$naslov.'>';
            }
            var_dump($_GET);
            ?>
          </pre>
          
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