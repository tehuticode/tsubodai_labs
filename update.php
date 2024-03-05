<?php
    include('src/functions.php');
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['id']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
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
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $user['firstName']; ?>">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $user['lastName']; ?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>">
        <br>
        <button name="btnUpdate">Update Record</button>
    </form>
    <?php else : ?>
        <h1>Record no bueno</h1>
    <?php endif; ?>
</body>
</html>
