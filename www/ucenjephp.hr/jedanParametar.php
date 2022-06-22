<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php require_once 'zaglavlje.php';?>
</head>

<body>

  <div class="grid-container">



   <?php require_once 'izbornik.php'; ?>

  <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell medium-12 ">
        <div class="warning callout">
          <?php echo $_GET['ime'];?>
        </div>
      </div>
    </div>
 

  

   <?php require_once 'podnozje.php';?>

 
  </div>
  <?php require_once 'jsskripte.php;';?>

 
</body>

</html>