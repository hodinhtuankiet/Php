<?php
// Tạo ma trận A có 3 hàng và 5 cột
$matrixA = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15)
);

// Hiển thị ma trận A
echo "Ma trận A:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $matrixA[$i][$j] . " ";
    }
    echo "\n";
}
