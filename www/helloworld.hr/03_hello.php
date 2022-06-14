<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //test printa, mi koristimo echo, brži je
    print 'Alo svete!';

?>
 <hr/>

    <?php
    echo "Hello World!";
    echo 'Hello World';
    
    ?>

<hr/>

<?php
    //best practice
    echo 'Tekst<br />Novi red<br />';
    echo 'prvi',PHP_EOL,'pokušaj',PHP_EOL;
    echo 'prvi<br />'.'drugi'.'treći';

?>

</body>
</html>