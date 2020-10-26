<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
</head>

<body>
    <header>
        <h1>Welcome</h1>
    </header>
    <div class="container">
        <a href="<?php echo base_url() ?>index.php/Users/register"><button id="register">Register</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url() ?>index.php/Users/login"><button id="login">Login</button></a>
    </div>
</body>

</html>