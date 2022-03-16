<?php


// for loop




$name="Gerlinde";
$surname="Sandmair";



function print_name(){
    global $name, $surname, $full_name;
    $full_name = $name." ".$surname;
    return $full_name;
}


for($i=0; $i<50; $i++){

print_name();
echo $full_name;
echo "<br>";

function print_another_name(){
    $full_name = $GLOBALS["name"]."".$GLOBALS["surname"];
    echo $full_name;
}
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
<div>
    <?php echo "<h1>Gerlinde Sandmair</h1>"; ?>

    </div>
     </p>
  </body>
  </html>