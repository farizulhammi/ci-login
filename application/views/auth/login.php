<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <center>
            <form action="<?= base_url('users/login_get');?>" method="POST">
            <table>
                <tr>
                    <td>
                       <input type="text" name="username" value="<?= $this->input->post('username');?>" id=""><br>
                    </td>
                </tr>
                <tr>
                    <td>
                       <input type="password" name="password" id="">
                    </td>
                </tr>
                <tr>    
                    <td>
                       <input type="submit" value="Masuk">
                    </td>
                </tr>
            </table>
            </form>
        </center>
</body>
</html>