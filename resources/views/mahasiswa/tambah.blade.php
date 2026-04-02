
<h1>Tambah Mahasiswa</h1>  

<h2>Tambah Mahasiswa</h2>
<form action="/mahasiswa/simpan" method="post">
    @csrf
    NIM : <input type="text" name="nim"><br><br>
    Nama : <input type="text" name="nama"><br><br>
    Jurusan : <input type="text" name="jurusan"><br><br>
    <button type="submit">Simpan</button>
</form>