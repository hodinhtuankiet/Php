<!DOCTYPE html>
<html>

<head>
    <title>Kết quả</title>
</head>

<body>
    <h2>Kết quả</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị tháng và năm từ form
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];

        // Kiểm tra năm nhuận
        $isLeapYear = false;
        if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
            $isLeapYear = true;
        }

        // Mảng lưu số ngày trong các tháng
        $soNgayTrongThang = [
            1 => 31,
            2 => ($isLeapYear ? 29 : 28),
            3 => 31,
            4 => 30,
            5 => 31,
            6 => 30,
            7 => 31,
            8 => 31,
            9 => 30,
            10 => 31,
            11 => 30,
            12 => 31,
        ];

        // Kiểm tra tháng hợp lệ
        if ($thang >= 1 && $thang <= 12) {
            // Hiển thị kết quả
            echo "Tháng $thang, năm $nam có " . $soNgayTrongThang[$thang] . " ngày.";
        } else {
            echo "Tháng không hợp lệ.";
        }
    }
    ?>

    <br><br>
    <a href="index.php">Quay lại</a>
</body>

</html>