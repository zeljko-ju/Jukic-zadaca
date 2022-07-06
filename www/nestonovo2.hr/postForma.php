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
          <form action="postfforma.php" method="post"
          enctype="multipart/form-data">
            <label for="naziv">Naziv</label>
            <input type="text" name="naziv" id="naziv">

            <label for="datoteka"></label>
            <input type="file" name="datoteka" id="datoteka">
            <input type="submit" value="Prenesi">
        
        
        </form>
        <?php
        if(isset($_POST['naziv'])&& isset($_FILES['datoteka'])
        move_uploaded_file($_FILES['datoteka']['tmp_name'],
        $_POST['naziv'] . '.jpg');
        })
        <?php
        print_r($_FILES);
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