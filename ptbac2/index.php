<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $delTa = $b * $b - 4 * $a * $c;
    $x1 = (-$b + sqrt($delTa)) / (2 * $a);
    $x2 = (-$b - sqrt($delTa)) / (2 * $a);
    $x3 = -$b / (2 * $a);
    if ($delTa > 0) {
        echo "Phuong trinh co hai nghiem" . $x1 . "va" . "$x2";
    } else if ($delTa < 0) {
        echo "Phuong trinh vo nghiem";
    } else {
        echo "Phuong trinh co nghiem kep" . $x3;
    }
}

?>
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
    <label>a</label>
    <input type="text" placeholder="a" name="a">
    <label>b</label>
    <input type="text" placeholder="b" name="b">
    <label>c</label>
    <input type="text" placeholder="c" name="c">
    <button type="submit">Tim Nghiem</button>
</form>
</body>
</html>
