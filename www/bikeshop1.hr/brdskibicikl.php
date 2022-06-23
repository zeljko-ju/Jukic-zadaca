<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php require_once 'zaglavlje.php';?>
</head>
<body style="background-color: <?=$_GET['tema'];?>"> 

    <div  class="grid-container">
  <!-- izbornik -->
    <?php include_once 'izbornik.php';?>
     
    </div>
  <!--tijelo -->
  <div style="color: <?=$_GET['boja'];?>"  class="grid-x grid-margin-x" id="tijelo">
    <div class="cell small-4">
    <h3>Najbolja ponuda bicikala na tržištu</h3>    
    <img src="https://media.istockphoto.com/photos/mountain-biker-silhouette-in-action-against-the-sunset-concept-for-picture-id1056751684" alt="MTB">
    
    <li>
        <a href="?tema=grey" href="?boja=white">vesela</a><br>
        <a href="?tema=white">svijetla</a>
    </li>
    </div>
  </div>
  <!--zaglavlje-->
  <?php include_once 'podnozje.php';?>

  <!--Js skripte -->
    <?php require_once 'jsskripte.php'?>

  </body>
</html>
