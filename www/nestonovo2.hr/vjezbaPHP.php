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
         vježbe w3resources: <hr>
        <?php
         $color = ['white', 'green', 'red', 'blue', 'black'];
         echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
            the $color[2] carpet, 
         the $color[1] lawn, the $color[0] house, the leaden sky. 
         The new president and his first lady. - Richard M. Nixon";
        

        #vježba 2 
        $color = ['white', 'green', 'red'];
        echo'<br />', $color[1], '<br />';
        echo $color[2], '<br />';
        echo $color[0], '<br />';



        $ceu = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
         "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"] ;
        asort ($ceu);
        foreach($ceu as $country => $capital);
        echo "The capital of   $country  is $capital."."\n";
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