<!DOCTYPE html>
<html>
<body>

<h2>Form Data Mahasiswa</h2>

<?= validation_list_errors() ?>

<?= form_open ('/biodata') ?>
    <label for="fname">Nim:</label><br>
    <input type="text" name="fnim" placeholder="Masukkan Nim"><br>
    <label for="lname">Nama:</label><br>
    <input type="text" name="fnama" placeholder="Masukkan Nama"  required ><br><br>
    <label for="lname">Alamat:</label><br>
    <input type="text" name="falamat" placeholder="Masukkan Alamat"><br><br>
    <input type="submit" value ="Kirim"> 
<?= form_close() ?>
</body>
</html>