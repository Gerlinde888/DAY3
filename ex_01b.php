<?php


// for loop

$i=0; 

$name = "Gerlinde";
$surname = "Sandmair";

function print_name(){
    global $name, $surname, $full_name;
    $full_name = $name." ".$surname;
    return $full_name;
}

// //while loop

// $i=0; 
// $name="Gerlinde Sandmair";

// echo "<br>";

// while ($i<50){
//     $i++;
//     echo $name;
//     echo "<br>";
// }

// echo "<br> Wechsel zu DO WHILE ";
// echo "<br>";

// // do while

// $i=0; 
// $name="Gerlinde Sandmair"; -->

// do 
// {
//     echo $name;
//     echo "<br>";
//     $i++;
//     }while($i<50);

?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 </title>
    <style>
        
        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
        }
        
    </style>
</head> 
<body>
<p>
<div><h1>
<?php

    /// for loop
    for($i=0; $i<50; $i++){
        print_name();
        echo $full_name;
        echo "<br>";
    }

?>
</h1>
</div>
     </p>
  </body>
  </html>