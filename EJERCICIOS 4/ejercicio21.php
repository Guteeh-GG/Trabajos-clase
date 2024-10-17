
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    
<?php

$radio = rand(50, 150);
 
?>

<svg  width="1000000" height="1000000">
    <circle cx="150" cy="200" r="<?php echo $radio; ?>" stroke-width="4" fill="red"/>
    <circle cx='<?php echo 150 + $radio *2 ?>' cy="200" r="<?php echo $radio; ?>" stroke-width="4" fill="blue"/>
    <circle cx="<?php echo 150 + $radio *4 ?>" cy="200" r="<?php echo $radio; ?>" stroke-width="4" fill="green"/>
</svg>

</body>
</html>
