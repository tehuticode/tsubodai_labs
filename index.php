<?php
    include('src/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsubodai Labs</title>
</head>
<body>
    <h1>Welcome to Tsubodai Labs</h1>
    <?php
        $devs = selectAll();
        formatArray($devs);
        formatArray(selectSingle());
        $user = selectSingle(1);
        echo 'Welcome, ' .$user['firstName'].' '.$user['lastName'];
    ?>
    
</body>
</html>