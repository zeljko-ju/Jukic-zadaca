<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?=$_GET['tema'];?>"> 

    <ul style="color: <?=$_GET['boja'];?>">
        
        <li>
            <a href="?tema=green">zelena</a>
            <a href="?boja=pink">pink</a>
            <p>teksttekst</p>
            <h1>ajde da vidimo</h1>
        </li>
        <hr />
        <li></li>
        <li></li>
        <p>teksttekst</p>
            <h1>ajde da vidimo</h1>
        <pre>
        <?php
        print_r($_GET);
        echo $_GET['tema']
      
        ?>

        </pre>

    </ul>

    
</body>
</html>