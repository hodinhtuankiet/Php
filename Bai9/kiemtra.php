<!DOCTYPE html>
<html>

<head>
    <title>Tìm USCLN và BSCNN</title>
</head>

<body>
    <h2>Tìm USCLN và BSCNN</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập số a: <input type="number" name="a" required>
        Nhập số b: <input type="number" name="b" required>
        <input type="submit" value="Tìm">
    </form>

    <?php
    function timUSCLN($a, $b)
    {
        while ($b != 0) {
            $remainder = $a % $b;
            $a = $b;
            $b = $remainder;
        }
        return $a;
    }

    function timBSCNN($a, $b)
    {
        return ($a * $b) / timUSCLN($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        $uscln = timUSCLN($a, $b);
        $bscnn = timBSCNN($a, $b);

        echo "USCLN của $a và $b là: $uscln<br>";
        echo "BSCNN của $a và $b là: $bscnn";
    }
    ?>
</body>

</html>