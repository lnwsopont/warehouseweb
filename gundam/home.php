<?
include 'lib/init.php';

$x = 1;
$y = 2;
$z = $x+$y;
$name = 'yo';

loadView('home', [
    'name' => $name,
    'x' => $z,
    'y' => 123
]);

?>
