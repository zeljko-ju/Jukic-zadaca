<?php
$ime=isset($_GET['ime'])? $_GET['ime']: ' ';

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


        <label for="ime">Ime</label>
        <input type="text" id="ime" name="ime" value="<?=$ime?>"/>
        
        
        <label >Iznos
            <input type="number" name="iznos" />
        </label>

        <label for="boja">boja</label>
        <input type="color" id="boja" name="boja" />

        <label for="datum">datum</label>
        <input type="date" id="datum" name="datum" />

        <label for="datum">datum i vrijeme</label>
        <input type="datetime-local" id="datum" name="datum" />

        <input placeholder="ivan.horvat@gmail.com">
        <input type="email" id="email" name="email" />

       
        <input
        placeholder="ivan.horvat@tvrtka.hr
        type="email" id="email" name="email" />

        <label for="lozinka">lozinka</label>
        <input type="password" id="password" name="password" />
        <input type="submit" value="Predaj">


        <!--odabiri -->
        <p>jednostruki odabir</p>
        <input type="radio" id="ljeto" name="gd" value="1">
        <label for="ljeto">ljeto</label>
        
        <label for="zima">zima</label>
        <input type="radio" id="zima" name="gd" value="2">
        <hr />

        <p>Višestruki odabir</p>
        <input type="checkbox" id="proljeće" name="vo[]" value="1">
        <label for="ljeto">ljeto</label>
        
        <label for="zima">zima</label>
        <input type="checkbox" id="jesen" name="vo[]" value="2">
        <hr />

        <p>Odabir iz liste</p>
        <label for="stavka">Odabeeri iz liste</label>
        <select name="stavka" id="stavka">
        <option value="1">Osijek</option>
        <option selected="selected" value="2">Donji Miholjac</option>
        </select>

        <label for="opis">Opis</label>
        <textarea name="opis" id="opis" cols="30" rows="10"></textarea>
        
         </form>

         <pre>
        <?php
        var_dump($_GET);



        
        ?>
        </pre>
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