<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family: <?=$_GET['font'];?>">


<ul>    
        <h2>boja kockice</h2>
        <li>
            
            <a href="?boja=green & ?font=arial">zelena</a>
        </li>
        <li>
            <a href="?boja=yellow">žuta</a>
        </li>        
        <li>
            <a href="?boja=blue">plava</a>
        </li>
        <li>
            <a href="?firstName=Željac"></a>
        </li>
            </ul>

<ul>
    <h2>font</h2>
    <li>
        <a href="?font=Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Impact</a>
    </li>
    <li>
        <a href="?font=Arial">Arial</a>
    </li>
</ul>
        
    
    <p>paragraf</p>
    <h1>naslov</h1>
    <h2>posnaslov</h2>
    <div class="kockica">
        <p>kockica</p>
    </div>

    <div class="veca_kockica" style="background-color: <?=$_GET['boja'];?>">  
        <h3>kocketina</h3>

        
    </div>
    
</body>
</html>