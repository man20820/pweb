<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Dashboard</h2>
    <p>Welcome</p>
    <?php echo $model->username; ?>
    [<a href="<?php echo base_url(); ?>login/logout">Logout</a>]
</body>

</html>