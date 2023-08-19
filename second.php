<?php
$str1 = 'dao tao lap trinh';
$str2 = 'dao tao lap nghiep';

echo $str1 . $str2;
$str3 = $str1 . ' ' . $str2;

echo $str3 . '<br/>';

$str4 = "Trung tâm đào tạo nghề {$str1} tại hà noi ";
echo $str4;
$url = 'https://www.youtube.com/watch?v=QeBrCFu-Aas&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=6';
$imgUrl = 'https://th.bing.com/th/id/OIP.g-jd5oxIv-L-N-mH-Y09OgHaHO?pid=ImgDet&rs=1';
$htmlOutput = '<a href="' . $url . '"><img src="' . $imgUrl . '" alt=""></a>';
echo $htmlOutput;
