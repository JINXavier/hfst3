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
    <style>
        body{
            text-align:center;
        }

        .rood{
            border:red solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i<=9 ;$i++) {
    if($i == 3) {
        $class = "class='rood'";
        } else {
        $class = "";
    }
    echo "<img ".$class. "src='img/pandas/panda".$i.".png'>";
}
?>

</body>
</html>
