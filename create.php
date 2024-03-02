<?php
    include('src/functions.php');
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        insert($firstName, $lastName, $email);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsubodai Labs</title>
</head>
<body>
    <h1>Insert</h1>
    <form action="" method="post">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Submit">
    
</body>
</html>