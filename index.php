<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'];?></p>
    <?php } ?>
    <label for="uname">User Name</label>
    <input type="text" id="uname" name="uname"> <br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password"> <br>

    <button type="submit">Login</button>
</form>

</body>
</html>