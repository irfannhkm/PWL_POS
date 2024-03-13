<!DOCTYPE html>
<html lang="en">
<body>
   <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username"><br><br>
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan nama">
        <br>
        <label>Password</label>
        <input type="text" name="password" placeholder="Masukkan password">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level">
        <br>
        <input type="submit" name="btn btn-success" value="Simpan">
    </form> 
</body>
</html>