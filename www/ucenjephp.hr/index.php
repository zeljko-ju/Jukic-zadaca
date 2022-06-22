<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php require_once 'zaglavlje.php';?>
</head>

<body>

  <div class="grid-container">
    <!--Start izbornik-->


   <?php require_once 'izbornik.php'; ?>

    <!--End izbornik-->


    <!--Start tijelo-->
    
  
 <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell medium-12 ">
        <div class="warning callout">
          Koristite gornji izbornik
        </div>
      </div>
    </div>
    <!--End tijelo-->

    <!--Start podnožje-->

   <?php require_once 'podnozje.php';?>

    <!--End podnožje-->
  </div>
  <?php require_once 'jsskripte.php;';?>

 
</body>

</html>