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
          <h3>TO DO LIST</h3>
          
          
          <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
          <form action="index.php" method="post"><strong>dodaj u popis zadataka:</strong>
          <input type="text" name="zadatak" id="zadatak">
        
          <input type="submit" class="submit success button expanded" name="submit" value="dodaj">
          </form>
          
          <?php 
          
        $errors = "";
      
       
        $db = mysqli_connect("localhost", "root", "", "todo");
      
        if (isset($_POST['submit'])) {
          if (empty($_POST['task'])) {
            $errors = "Morate unijeti vrijednost";
          }else{
            $zadaci = $_POST['zadaci'];
            $sql = "INSERT INTO zadatak (zadaci) VALUES ('$zadaci')";
            mysqli_query($db, $sql);
            header('location: index.php');
          }
        }	
      
      
        
        ?>
      </div>
      </div>
    </div>
    <!-- End tijelo -->
    
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>