<?php
//    if(isset($_POST['action']))
//    {
//       $action = $_POST['action'];
//       if($action == 'send'){
//          $name = $_POST['txtFullName'];
//          echo "Hello !" . $name;
//       }
//    }

$action = filter_input(INPUT_POST,'action');
if(isset($action) && $action == 'send'){

    $txtAge = filter_input(INPUT_POST,'txtAge',FILTER_VALIDATE_INT);
    $gtinh = filter_input(INPUT_POST,'gtinh');

    $hobby = filter_input(INPUT_POST,'hobby',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
    $city = filter_input(INPUT_POST,'lstCity');


    if(!empty($txtAge))
        echo "Age : " . $txtAge . "<br>";
    if(!empty($gtinh))
        echo "Sex : " . $gtinh . "<br>";

    if(!empty($hobby)){
        echo "<h5>Hobby:</h5>";
        foreach($hobby as $v):
            echo $v . "<br>";
        endforeach;    
    }

    if(!empty($city)){
        echo "<br>City: " . $city . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Php</title>
</head>
<body>
    <form action="" method="post">
        Age: <input type="text" name="txtAge"> <br>
        <h3>Sex:</h3>
        <input type="radio" name="gtinh" checked value="Male"> Male <br>
        <input type="radio" name="gtinh" value="FeMale"> FeMale <br>
        <input type="radio" name="gtinh" value="Other"> Other <br>
        <h3>Hobby:</h3>
        <input type="checkbox" name="hobby[]" value="Game"> Game <br>
        <input type="checkbox" name="hobby[]" value="Programming"> Programming <br>
        <input type="checkbox" name="hobby[]" value="Walking"> Walking <br>
        <h3>City:</h3>
        <select name="lstCity">
            <option value="Ha Noi">Ha Noi</option>
            <option value="Da Nang" selected>Da Nang</option>
            <option value="Sai Gon">Sai Gon</option>
        </select>
        <input type="hidden" name="action" value="send">
        <input type="submit" value="Send">
    </form>
</body>
</html>