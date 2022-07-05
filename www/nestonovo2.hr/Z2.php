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
        <div class="cell large-3">
          <div class="callout">
           prvi
          </div>
        </div>
        <div class="cell large-3">
          <div class="callout">  
            drugi
          </div>
        </div>
        <div class="cell large-3">
          <div class="callout">
            treći
          </div>
        </div>
        <div class="cell large-3">
          <div class="callout">
           četvrti
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