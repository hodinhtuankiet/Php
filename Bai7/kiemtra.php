<!DOCTYPE html>
<html>

<head>
    <title>Tính giai thừa</title>
</head>

<body>
    <h2>Tính giai thừa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập số nguyên dương n: <input type="number" name="n" min="0" required>
        <input type="submit" value="Tính">
    </form>

    <?php
    function tinhGiaiThua($n)
    {
        if ($n == 0) {
            return 1;
        } elseif ($n < 0) {
            return "Không xác định (n < 0)";
        } else {
            return $n * tinhGiaiThua($n - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        echo "Giai thừa của $n là: " . tinhGiaiThua($n);
    }
    ?>
</body>

</html>