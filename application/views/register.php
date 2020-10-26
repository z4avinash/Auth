<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/register.css">
</head>

<body>
    <form id="formRegister" action="" enctype="multipart/form-data" method="post">
        <div class="full_name">
            <label>Full Name: </label><input value="<?php echo set_value('full_name') ?>" type="text" placeholder="enter name" id="full_name" name="full_name"><span class="error"><?php echo form_error('full_name') ?></span>
        </div><br>
        <div class="username">
            <label>Username: </label><input value="<?php echo set_value('username') ?>" type="text" placeholder="enter username" id="username" name="username"><span class="error"><?php echo form_error('username') ?></span>
        </div><br>
        <div class="email">
            <label>E-mail: </label><input value="<?php echo set_value('email') ?>" type="email" placeholder="enter email" id="email" name="email"><span class="error"><?php echo form_error('email') ?></span>
        </div><br>
        <div class="password">
            <label>Password: </label><input value="<?php echo set_value('password') ?>" type="password" placeholder="enter password" id="password" name="password"><span class="error"><?php echo form_error('password') ?></span>
        </div><br><br>

        <input type="submit" value="Register" id="register">
    </form>
    <br>
    <a href="<?php echo base_url() ?>index.php/Users/index"><button id="home">Home</button></a>
</body>

</html>