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
        <div class="cell medium-3 ">
          <div class="success callout">
            baja
          </div>
        </div>
        <div class="cell medium-3 ">
          <div class="warning callout">  
            je
          </div>
        </div>
        <div class="cell medium-3 ">
          <div class="alert callout">
            do
          </div>
        </div>
        <div class="cell medium-3 ">
          <div class="alert callout">
            jaja
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