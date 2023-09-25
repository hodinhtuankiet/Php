<?php
$arr = [
    'x' => 'Xuan',
    'h' => 'Thu',
    'd' => 'Dong',
    't' => 'Thu'
];

echo "<br>";
foreach ($arr as $k => $v) :
    echo "$k => $v <br>";
endforeach;

echo "<pre>";
print_r(array_search('Dong', $arr));
echo "</pre>";
