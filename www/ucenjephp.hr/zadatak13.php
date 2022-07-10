<
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
            $a = isset($_POST['a'])? $_POST['a'] : '';
            $b = isset($_POST['b'])? $_POST['b'] : '';
            $c = isset($_POST['c'])? $_POST['c'] : '';

            
            ?>
         <form action="zadatak13.php" method="post">
         <label for="broj1">prva vrijednost</label>   
         <input type="number" name="a" id="broj" value="<?=$a?>">

         <label for="broj2">druga vrijednost</label>   
         <input type="number" name="b" id="broj" value="<?=$b?>">

         <label for="broj 3">treća vrijednost</label>   
         <input type="number" name="c" id="broj" value="<?=$c?>">
         <input type="submit" value="predaj">



         </form>
         <?php
    
            #obrada

       if($a>$b && $a>$c){
        echo 'najveći broj je: ', $a;
       }else if($b>$a && $b>$c){
        echo 'najveći broj je: ', $b;
       }else {
        echo 'najveći broj je: ', $c;
       }
       
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

