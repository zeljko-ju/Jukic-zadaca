<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo '<',$_GET['element'],'>'; ?>
        <?=$_GET['tekst'] ?>
    <?php echo '</',$_GET['element'],'>'; ?>
   
 

        <h1>hello</h1>
        <p>kako jeee</p>
        <div><p>maestralno</p></div>

        <?php
        print_r($_GET);
        echo $_GET['element']
      
        ?>

        </pre>

</body>
</html>