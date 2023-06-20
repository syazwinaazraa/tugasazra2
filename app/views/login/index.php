<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <center><img src="<?php echo AST; ?>/img/pharmacy.png" alt="" class="brand"></center>
        <h2>Login</h2>
        <form action="<?php echo URL; ?>/Login/login" method="post">
            <input type="text" name="user_nama" placeholder="Username" class="input-control">
            <input type="password" name="user_password" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn-login">
        </form>
    </div>
</body>
</html>