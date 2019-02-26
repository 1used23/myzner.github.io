<?php
require_once 'result.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$data->getMovieName();?></title>
</head>
<body>
    <?php
        $data->echoMovieData();
    ?>
</body>
</html>