<!DOCTYPE html>
<html>

<head>
    <title>Tính tổng bình phương của số lẻ</title>
</head>

<body>
    <h2>Tính tổng bình phương của số lẻ</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập số nguyên dương N: <input type="number" name="N" min="1" required>
        <input type="submit" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["N"];
        $tong = 0;

        for ($i = 1; $i <= $N; $i += 2) { // Lặp qua các số lẻ từ 1 đến N
            $tong += $i * $i; // Tính bình phương và cộng vào tổng
        }

        echo "Tổng bình phương của các số lẻ từ 1 đến $N là: $tong";
    }
    ?>
</body>

</html>