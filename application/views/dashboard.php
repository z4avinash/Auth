<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome <?php echo strtoupper($user['full_name']) ?></h1>
    <hr><br><br></br>
    <a href="<?php echo base_url() ?>index.php/Users/logout"><button id="logout">Log Out</button></a>
</body>

</html>