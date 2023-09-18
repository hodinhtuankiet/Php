<?php
 define("pi",3.14);
$r = 10;
echo "<span style='color:red'>Tính chu vi và diện tích hình
tròn:</span><br/>";
echo "Bán kính hình tròn : ".$r . "<br/>";
echo "Chu vi hình tròn : " . 2*pi*$r . "<br/>";
echo "Diện tích hình tròn : ". pi*pow($r,2);
