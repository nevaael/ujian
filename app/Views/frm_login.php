<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Form Login</h2>

<?= validation_list_errors() ?>

<?= form_open('loginpw') ?>

<label>Nama :</label><br>
<input type="text" name="fnama"><br><br>

<label>Password :</label><br>
<input type="password" name="fpassword"><br><br>

<label>Confirm Password :</label><br>
<input type="password" name="fconfirm"><br><br>

<input type="submit" value="Login">

<?= form_close() ?>

</body>
</html>
