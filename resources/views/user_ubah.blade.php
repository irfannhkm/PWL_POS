<!DOCTYPE html>
<html lang="en">
<body>
   <h1>Form Tambah Data User</h1>
   <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">
       
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username" value="{{ $data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan nama" value="{{ $data->username}}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" value="{{ $data->password}}">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id}}">
        <br>
        <input type="submit" name="btn btn-success" value="Ubah">
    </form> 
</body>
</html>