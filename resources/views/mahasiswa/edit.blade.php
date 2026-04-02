<h2>Edit Mahasiswa</h2>
<form action="/mahasiswa/ubah/{{ $mhs->id }}" method="post">
    @csrf
    NIM :
    <input type="text" name="nim" value="{{ $mhs->nim }}">
    <br><br>
    Nama :
    <input type="text" name="nama" value="{{ $mhs->nama }}">
    <br><br>
    Jurusan :
    <input type="text" name="jurusan" value="{{ $mhs->jurusan }}">
    <br><br>
    <button type="submit">Update</button>
</form>
