<?php
// Tạo mảng arr có 7 phần tử
$arr = [1, 2, 3, 4, 5, 6, 7];

// Duyệt mảng arr
echo "Duyệt mảng arr:\n";
foreach ($arr as $value) {
    echo "$value ";
}
echo "\n";

// Xóa một phần tử đầu mảng và cuối mảng
array_shift($arr); // Xóa phần tử đầu
array_pop($arr);   // Xóa phần tử cuối

// Chèn thêm một phần tử vào vị trí đầu mảng và cuối mảng
array_unshift($arr, 0); // Chèn 0 vào đầu mảng
array_push($arr, 8);    // Chèn 8 vào cuối mảng

// Tìm kiếm giá trị x có trong mảng arr
$x = 5;
if (in_array($x, $arr)) {
    echo "$x có trong mảng arr\n";
} else {
    echo "$x không có trong mảng arr\n";
}

// Đảo ngược các giá trị mảng arr
$arr_reversed = array_reverse($arr);

// Sắp xếp mảng tăng dần và giảm dần theo giá trị
sort($arr);   // Sắp xếp tăng dần
rsort($arr);  // Sắp xếp giảm dần

// Sắp xếp mảng tăng dần và giảm dần theo khóa (key) của mảng arr
asort($arr);   // Sắp xếp tăng dần theo giá trị, bảo tồn khóa
arsort($arr);  // Sắp xếp giảm dần theo giá trị, bảo tồn khóa
ksort($arr);   // Sắp xếp tăng dần theo khóa
krsort($arr);  // Sắp xếp giảm dần theo khóa

// In mảng sau khi thực hiện các thao tác
echo "Mảng arr sau khi thực hiện các thao tác:\n";
print_r($arr);

// In mảng arr sau khi đảo ngược
echo "Mảng arr sau khi đảo ngược:\n";
print_r($arr_reversed);
