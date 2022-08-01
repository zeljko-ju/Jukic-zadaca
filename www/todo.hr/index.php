<?php
          $a = isset($_GET['a']) ? $_GET['a'] : '';
          

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
        <div class="success callout">
          <h3>TO DO LIST</h3>
          
        
         
          <form action="index.php" method="post">
            <label for="a"><strong>dodaj u popis zadataka:</strong></label>
          <input type="text" name="a" id="a" value="<?=$a?>">
        
          <input type="submit" class="submit success button expanded" name="submit" value="dodaj">
          </form>
          
          <?php
          $a = isset($_POST['a']) ? $_POST['a'] : '';
          echo '<table border="10" style="background-color:grey">';
          for($i=0;$i<=10;$i++){
            echo '<tr>';
            for($j=0;$j<=1;$j++){
               
              echo '<td>';
              if
              '</td>';
            echo '</tr>';}
            }
          

          ?>
      
      
       
        
      <?php /*
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
        /*
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
          
         */
          
      
        
        




        ?>


      </div>
      </div>
    </div>
    <!-- End tijelo -->
    
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>