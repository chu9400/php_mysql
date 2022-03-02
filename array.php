<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php
    $coworkers = array('A','B','C','D');

    echo count($coworkers).'<br />';
    echo var_dump($coworkers).'<br />';
    array_push($coworkers,'E','F','G');
    var_dump($coworkers);
?>
</body>
</html>
