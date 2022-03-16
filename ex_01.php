<?php




// for loop - The for statement is used when you know 
// how many times you want to execute a statement or 
// a block of statements.
// The variable must be declared, is traditionally named
// $i (for iteration).
// for(initializer; condition; counter;)

$i=0; 
$name="Gerlinde Sandmair";

for($i=0; $i<50; $i++){

    echo $name;
    echo "<br>";
}
echo "<br> Change to WHILE";
echo "<br>";


// while loop -The while statement will execute a 
// block of code as many times as a test expression 
// is true.

$i=0; 
$name="Gerlinde Sandmair";

echo "<br>";

while ($i<50){
    $i++;
    echo $name;
    echo "<br>";
}

echo "<br> Change to DO WHILE ";
echo "<br>";

// do while -  statement will execute a block of 
// code at least once - it will then repeat the 
// loop as many times as the condition is true.

$i=0; 
$name="Gerlinde Sandmair";

do 
{
    echo $name;
    echo "<br>";
    $i++;
    }while($i<50);

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

    </div>
     </p>
  </body>
  </html>