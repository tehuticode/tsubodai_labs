<?php
    include('src/functions.php');
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        include('src/functions.php');
        update($firstName, $lastName, $email);
    }
    $user = isset($_GET['id']) ? selectSingle($_GET['id']) : NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsubodai Labs</title>
</head>
<body>
    <?php if ($user != false) : ?>
    <h1>Update</h1>
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
        <button name="btnUpdate">Update Record</button>
    </form>
    <?php else : ?>
        <h1>Record no bueno</h1>
    <?php endif; ?>
</body>
</html>