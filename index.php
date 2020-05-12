<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>find and delete</label>
    <input type="text" name="num"><br>
    <input type="submit" value="find&delete">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $arr = array(1, 2, 3, 4, 1, 5, 6, 7, 8);
    for ($i = 0; $i < count($arr); $i++) {
        if ($num == $arr[$i]) {
            array_splice($arr, $i, 1);
            $i--;
        }
    }
    foreach ($arr as $value) {
        echo $value . " ";
    }
}
?>

</body>
</html>