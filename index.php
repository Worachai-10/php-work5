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
        echo "เลขที่ $num <br>";
    }
    if ($num > 1) {
        $max = 1;
        $opt = range($max, $min);
        foreach ($opt as $new) {
            echo "เลขที่ $new <br>";
        }
    }
    ?>
</body>
</html>
