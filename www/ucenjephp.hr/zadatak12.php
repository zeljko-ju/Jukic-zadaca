<?php

// Složiti formu koja ima jedno unosno polje teksta
// i jednu listu stavaka: Naslov 1, Naslov 2, Naslov 3

// Kada korisnik postavi vrijednosti isisuje se 
// uneseni tekst s pripadajućom h oznakom 

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
          <form action="zadatak12.php" method="post" enctype="multipart/form-data">
          <select name="naslov" id="naslov">
          <option value="naslov 1 ">Naslov 1</option>
          <option value="2">Naslov 2</option>
          <option value="3"> Naslov 3</option>
          </select>
          <label for="odabir">vaš naslov</label>
          <input type="text" name="odabir" ID="odabir">

          <input type="submit" class="alert button expanded" value="predaj">
</form>

    <?php
    if(isset($_POST['odabir']) && isset($_POST['naslov'])){
        echo $_POST['naslov'].$_POST['odabir'];
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