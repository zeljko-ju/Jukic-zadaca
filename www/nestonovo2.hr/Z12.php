<?php
$tekst=isset($_GET['tekst'])? $_GET['tekst']: ' ';
$naslov=isset($_GET['naslov'])? $_GET['naslov']: '1 ';
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
        <label for="tekst">tekst</label>
        <input type="text" id="tekst" name="tekst" value=<?=$tekst?>/>
        <label for="naslov">Odabeeri iz liste</label>
        <select name="naslov" id="naslov">
            <?php for($i=1;$i<=3;$i++): ?>
                <option 
                <?php
                if($naslov==$i){
                    echo 'selected="selected"';
                }
                ?>
                ></option>
                <?php endfor;?>
        <option value="1">Prvi</option>
        <option selected="selected" value="2">Drugi</option>
        <option selected="selected" value="3">treći</option>
        </select>



    </form>
    <?php if(isset($_GET[naslov])){
        echo '<h'. $naslov '>'.$tekst. '</h'.$naslov;
    }
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