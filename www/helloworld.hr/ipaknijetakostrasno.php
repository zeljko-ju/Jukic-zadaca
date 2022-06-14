<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 1. način, u head, obrati pažnju da dodajemo i style i php-->
    <style> 
        p{
            color: <?php echo 'red'; //najbolja praksa?>
        }
    </style>
</head>
<body <?php echo 'style="background-color: blue;"';?>>
<!--unutar body elementa se smatra dobrom praksom 
dok je unutar elementa npr h1, p itd loša praksa.
obrati paznju na zatvaranje svih zagrada i na navodnike, vježbaj!-->
    <p>ajde da probamo!</p>

    <h6<?php echo '>'; // NIJE dobra praksa ?>
            Tekst paragrafa
            <?php 
            echo '</p>'; // nije dobra praksa
            ?>
    
</body>
</html>