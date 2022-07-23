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
          <input type="text" name="zadatak" id="zadatak" value="zadatak">
        
          <input type="submit" class="submit success button expanded" name="submit" value="dodaj">
          </form>
          
          <?php 
          
        $errors = "";
      
       
        $db = mysqli_connect("localhost", "root", "", "todo");
      
        if (isset($_POST['submit'])) {
          if (empty($_POST['zadaci'])) {
            $errors = "Morate unijeti vrijednost";
          }else{
            $zadaci = $_POST['zadaci'];
            $sql = "INSERT INTO zadatak (zadaci) VALUES ('$zadaci')";
            mysqli_query($db, $sql);
            header('location: index.php');
          }
        }	

        $zadatak = mysqli_query($db, "SELECT * FROM zadatak");

        $i = 1; while ($row = mysqli_fetch_array($zadatak))
        
        $lista= '<li>';
        if (isset($_POST['zadatak'])){
            
            echo '<pre>';
            echo '<li>',  $_POST['zadatak'], '<a style="color:red" href="index.php">       X</a>';
          echo '</li>'; 
          echo '</pre>'; 
          $row++;
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