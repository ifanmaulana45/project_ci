<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <?php if(!empty($output)):?>
        <?php echo $output ?>
    <?php endif?>
    <form action="" method="post">
        <label for="">Username</label><br>
        <input type="text" name="name" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>