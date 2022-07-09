<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Subota
    <ul>
        <li>
            <a href="zadatak01.php">prvi zadatak</a>
            
        </li>
        <li>
            <a href="zadatak02.php">drugi zadatak</a>
        </li>
        <li>
            <a href="zadatak03.php">treći zadatak</a>
        </li>
        <li>
            <a href="zadatak04.php">četvrti zadatak</a>
        </li>
        <li>
            <a href="zadatak05.php">peti zadatak</a>
        </li>
        
    </ul>
    <!--post forma koja šalje select listu sa 3 stavke-->
    <form action="" method="post">
        <select name="stavka" id="stavka">
            <option value="1">stavka 1</option>
            <option value="2">stavka 2</option>
            <option value="3">stavka 3</option>
        </select>
        <select name="stavka2" id="stavka">
            <?php
            for($i=1;$i<=333;$i++):
            ?>
            <option value="<?=$i?>">stavka: <?=$i?></option>
            <?php endfor; ?>
        </select>
    </form>
</body>
</html>