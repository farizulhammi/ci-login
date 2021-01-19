<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>  Selamat Datang   </h1>
    <?php
    $tampil = $this->session->userdata('username');
    print_r($tampil);
    ?>
	<a href="<?= base_url('users/logout');?>">Log Out</a>
    </center>
</body>
</html>