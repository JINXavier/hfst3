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
//for ($i = 1; $i<=9 ;$i++) {
 //   echo "<img src='img/pandas/panda".$i.".png'>";
//}
$heroes = array ("11-1-768x432.jpg", "mobile-legends-gusion.jpg","mobile-Legends-Lawsuit.jpg");

foreach($heroes as $hero) {
    echo "<img src='img/heroes/".$hero."'>";
}
?>

</body>
</html>
