<?php error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Multiplication Table</title>
  <meta charset="UTF-8">
</head>

<body>
    
<?php 
$min_multiplicand = intval(htmlspecialchars($_GET["min_multiplicand"]));
$max_multiplicand = intval(htmlspecialchars($_GET["max_multiplicand"]));
$min_multiplier = intval(htmlspecialchars($_GET["min_multiplier"]));
$max_multiplier = intval(htmlspecialchars($_GET["max_multiplier"]));
$tall = $max_multiplicand - $min_multiplicand + 2;
$wide = $max_multiplier - $min_multiplier + 2;

//checks if min is less than max
if($min_multiplicand > $max_multiplicand) {
    echo '<p>Minimum multiplicand is larger than maximum';
}
if($min_multiplier > $max_multiplier) {
    echo '<p>Minimum multiplier is larger than maximum';
}

//checks if they are integers
if(is_int($min_multiplicand) == false){
    echo '<p>Min_multiplicand must be an integer';
}
if(is_int($min_multiplier) == false){
    echo '<p>Min_multiplier must be an integer';
}
if(is_int($max_multiplicand) == false){
    echo '<p>Max_multiplicand must be an integer';
}
if(is_int($max_multiplier) == false){
    echo '<p>Max_multiplier must be an integer';
}

//checks if they are empty
if($min_multiplicand == ''){
    echo '<p>Missing parameter min_multiplicand';
}
if($min_multiplier == ''){
    echo '<p>Missing parameter min_multiplier';
}
if($max_multiplicand == ''){
    echo '<p>Missing parameter max_multiplicand';
}
if($max_multiplier == ''){
    echo '<p>Missing parameter max_multiplier';
}

?>

</body>
</html>