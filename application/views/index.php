<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>   Login Dulu   </h1>
        <a href="<?= base_url('users/login');?>">Login</a>
    </center>
    <?php
    $tampil = $this->session->userdata('username');
    print_r($tampil);

    ?>
</body>
</html>