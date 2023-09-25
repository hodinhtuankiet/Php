<!DOCTYPE html>
<html>

<head>
    <title>Kết quả kiểm tra tam giác</title>
</head>

<body>
    <h1>Kết quả kiểm tra tam giác</h1>

    <?php
    // Lấy giá trị từ form
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    // Kiểm tra tam giác
    if ($side1 <= 0 || $side2 <= 0 || $side3 <= 0) {
        echo "Không phải tam giác. Các cạnh phải lớn hơn 0.";
    } elseif ($side1 + $side2 <= $side3 || $side1 + $side3 <= $side2 || $side2 + $side3 <= $side1) {
        echo "Không phải tam giác. Tổng của hai cạnh bất kỳ phải lớn hơn cạnh còn lại.";
    } else {
        // Xác định loại tam giác
        if ($side1 == $side2 && $side2 == $side3) {
            echo "Đây là tam giác đều.";
        } elseif ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
            echo "Đây là tam giác cân.";
        } else {
            echo "Đây là tam giác thường.";
        }

        // Tính chu vi
        $perimeter = $side1 + $side2 + $side3;
        echo "<br>Chu vi tam giác là: " . $perimeter;

        // Tính diện tích sử dụng công thức Heron
        $s = $perimeter / 2;
        $area = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
        echo "<br>Diện tích tam giác là: " . $area;
    }
    ?>
</body>

</html>