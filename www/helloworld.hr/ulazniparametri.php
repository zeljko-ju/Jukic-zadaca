<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color: <?=$_GET['boja'];?>""> 
    
    <ul>
        
        <li>
            <a href="?tema=grey">grey</a>
            <a href="?boja=pink">kdkfkdfkslf</a>
            <p>teksttekst</p>
        </li>
        <hr />
        <li></li>
        <li></li>
        <pre>
        <?php
        print_r($_GET);
        echo $_GET['tema']
      
        ?>

        </pre>

    </ul>

    
</body>
</html>