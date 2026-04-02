
<h1>Data Mahasiswa</h1>  

<a href="/mahasiswa/tambah">Tambah Mahasiswa</a>
    
<br><br>
<table border="1" cellpadding="10" class="table table-striped">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach($mhs as $m)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->jurusan }}</td>
        <td>
        <a href="/mahasiswa/edit/{{ $m->id }}">Edit</a> |
        <a href="/mahasiswa/hapus/{{ $m->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
