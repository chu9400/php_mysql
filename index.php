<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_MySQL</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>

    <ol>
        <?php 
            $list = scandir('./data');
            var_dump($list);
            echo '<br />';
            print_r($list);
            
        ?>
    </ol>
    <h2>
        <?php 
            if(isset($_GET['id'])) {
                echo $_GET['id']; 
                echo "<br />";
            } else {
                echo "Welcome <br />";
            }
        ?>
    </h2>

    <?php 
        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id'].".txt");
        } else {
            echo "Hello, PHP";
        }
    ?>

</body>
</html>
