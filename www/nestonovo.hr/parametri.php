<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zagljavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-padding-x">
      
      
      
    </div>
  </div>
  <div class="cell medium-auto medium-cell-block-container" id="tijelo">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-4 medium-cell-block-y">
        
        <h2><div class="warning callout">lijevi izbornik</div></h2>
        <p><div class="success callout">nešto vrlo pametno napisano</p>
        p>Suspendisse pulvinar, massa iaculis feugiat lobortis, dolor sapien vestibulum nulla, vel cursus tellus leo in lorem. Aliquam eu placerat urna. Suspendisse sed viverra orci, ut mattis neque. Fusce non ultrices nisi. In sagittis varius mollis. Quisque dolor quam, consectetur eu lacinia ac, ullamcorper vel arcu. Nullam mattis imperdiet nulla sed ornare. Praesent tristique, est id eleifend vestibulum, neque nibh condimentum ex, nec lobortis purus justo a libero. Phasellus id ex ac nunc hendrerit hendrerit. Nullam urna ipsum, rutrum at fringilla vel, venenatis non purus. Maecenas egestas ex vitae venenatis molestie. Ut et odio egestas, accumsan neque et, viverra nisl. Sed faucibus nec nulla sed imperdiet. Fusce quis sem ac urna semper tempor a id elit. Nulla fringilla vitae sapien a vehicula.</p>
        <p>Nullam vestibulum lorem nec lectus egestas, nec ullamcorper diam maximus. Maecenas condimentum, nibh at blandit semper, ex erat tempus magna, id maximus neque velit accumsan nibh. Aenean dignissim lorem eu nisl laoreet vestibulum. Vivamus efficitur et augue vitae tincidunt. Etiam et magna felis. Integer mattis, nisi aliquet scelerisque blandit, ex mi sodales ante, eget accumsan quam magna et ligula. Curabitur id tristique leo. Proin rutrum mi vitae enim rhoncus, at cursus neque eleifend. Integer ultrices volutpat tellus ac porta. Fusce sollicitudin venenatis lacinia. Fusce ante lorem, gravida semper varius non, pharetra non erat. Sed dapibus arcu turpis, ac sollicitudin nibh lacinia vel. Nullam at enim porta, luctus metus sit amet, rutrum odio. Cras tempor enim vel pellentesque sollicitudin. Maecenas ullamcorper, sem non accumsan volutpat, neque tortor pulvinar orci, ut ultrices ligula lorem ut risus.</p>
        <p>Aliquam facilisis, nibh eget posuere suscipit, arcu sapien iaculis odio, in molestie dolor lectus vitae sem. Cras id nunc mollis mi rutrum dapibus. Quisque rutrum a augue at scelerisque. Praesent faucibus ac enim vitae gravida. Sed et sodales elit. Duis magna lectus, interdum sit amet metus a, sagittis varius magna. Proin nibh lectus, egestas a luctus ut, dapibus et enim. Curabitur fringilla ipsum vitae nunc imperdiet consectetur eget non neque. Suspendisse ultricies odio quis lorem vulputate, ac vulputate turpis feugiat. Maecenas posuere rhoncus orci, in ornare velit suscipit tempor. Curabitur pretium nisl id lorem placerat consequat. In quis quam eros. Nam mattis elit eu quam sagittis, in varius erat tempor.</p>
        <p>Fusce felis magna, pellentesque eget mollis a, rutrum id eros. Curabitur auctor varius arcu a consequat. Phasellus quis pulvinar enim, eu ultricies justo. Pellentesque risus libero, dapibus at erat ultricies, gravida varius erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla tempus, justo ut laoreet mollis, nunc tellus convallis urna, vel pretium dui velit eget ligula. Aliquam semper sed nulla a molestie. Maecenas at egestas massa, vitae aliquam mi. Fusce nec sem egestas, pretium lacus non, tincidunt sapien. Sed tristique odio at ultricies vulputate. Integer et convallis augue, eu aliquam enim. Mauris ut faucibus diam. Donec vulputate nunc sed congue accumsan. Etiam lobortis nisi quis lacinia pharetra.</p>
        </div>
      </div>
      <div  class="cell medium-8 medium-cell-block-y">
        <h2>koristi gornji izbornik</h2>
        <php style="font-family: <?php echo $_GET['font'] ?>"> 
        <php style="font-size: <?php echo $_GET['size'] ?>"> 
        <p style="color: <?php echo $_GET['boja'] ?>">
            <?php echo $_GET['ime'] ?>
            
          </p>
   

      </div>
    </div>
  </div>
  
</div>
    </div>
    <!-- End tijelo -->
    <?php 
    // čitati https://www.tutorialrepublic.com/php-tutorial/php-include-files.php
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>