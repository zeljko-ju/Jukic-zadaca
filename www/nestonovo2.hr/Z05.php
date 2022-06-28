<?php



$x = isset($_GET['x']) ? $_GET['x']: 2;




if (($x % 2) === 0) {
    echo '<body style="background-color: green">';
} else{
    echo '<body style="background-color: red">';
}
