<?php
/**
 * Created by IntelliJ IDEA.
 * User: Christopher
 * Date: 9/10/2019
 * Time: 9:58 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>

</head>
<body>
<?php
$leeftijd = 13;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <3) {
    $bedrag = 0;
}
echo $bedrag;
?>

</body>
</html>
