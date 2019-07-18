<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
    <?php
    if (isset($_GET['num'])){
        $n = intval($_GET['num']);
        $x = 0;
        $y = 0;
        $t = 1;
        echo "$t ";
        for ($i = 1; $i < $n; $i++){
            $z = $x + $y +$t;
            echo "$z ";
            $x= $y;
            $y= $t;
            $t = $z;
        }
    }
    ?>
</body>
</html>