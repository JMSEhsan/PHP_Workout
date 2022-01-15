<!-- https://www.w3schools.com/php/default.asp -->

<!DOCTYPE html>
<html>
<body>

<?php
echo "Some PHP script!";
?>

<?php
$txt = "PHP";
echo "I love $txt!";
?>

<?php
$x = 5 /* + 15 */ + 5 * 6;
echo $x;
?>
                     <!-- php math -->
<?php
echo(pi()); // returns 3.1415926535898
?>

<?php
echo(min(0, 400, 30, 200, -30, -60). "\n"); // returns -60
echo(max(0, 400, 30, 200, -30, -60). "\n");  // returns 400
?>

         <!-- Chieck if the type of a variable is integer -->
<?php
$x = 3478;
var_dump(is_int($x));

$x = 34.09;
var_dump(is_int($x));   // var_dump() function in PHP returns the data type and value
?>

</body>
</html>