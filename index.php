<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-วรชัย</title>
</head>
<body>
    <?php
    $no = 10;
    $min = $no - 1;
    $st = range($no, 40);
    foreach ($st as $num) {
        echo "เลขที่ $num<br>";
    }
    if ($num > 1) {
        $my = 1;
        $st = range($my, $no - 1);
        foreach ($st as $new) {
            echo "เลขที่ $new<br>";
        }
    }
    ?>
</body>
</html>
