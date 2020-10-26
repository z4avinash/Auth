<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/login.css">
</head>

<body>
    <form id="loginForm" action="" enctype="multipart/form-data" method="post">
        <div class="email">
            <label>E-mail: </label><input value="<?php echo set_value('login_email') ?>" type="email" name="login_email" placeholder="enter email" id="login_email"><span class="error"><?php echo form_error('login_email') ?></span>
        </div>
        <br>
        <div class="password">
            <label>Password: </label><input value="<?php echo set_value('login_password') ?>" type="password" placeholder="enter password" id="login_password" name="login_password"><span class="error"><?php echo form_error('login_password') ?></span>
        </div><br><br>
        <input type="submit" name="login_submit" value="Log In">
    </form><br>
    <a href="<?php echo base_url() ?>index.php/Users/index"><button id="home">Home</button></a>
</body>

</html>