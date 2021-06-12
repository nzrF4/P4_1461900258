<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> 1461900258 Pertemuan 4 </title>
    <style>
            table {
                border-collapseL collapse;
                border-spacing: 0;
                widthL 100%;
                border: 1px solid #ddd;
            }
            thead{
                background-color: #f2f2f2;
            }
            th, tr{
                text-align: left;
                padding: 8px;
            }
            tr:nth=child(even){bacground-color: #f2f2f2}.tambah{
                padding: 8px 16px :
                text-decoration:non;
            }
    </style>
</head>
<body>

  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
    <h1> TUGAS EXPORT EXCEL </h1>
    
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Jenis Buku</th>
            <th>Tahun Terbit</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
          <tr>
            <td>{{ $row -> id }}</td>
            <td>{{ $row-> judul }}</td>
            <td>{{ $row-> jenis }}</td>
            <td>{{ $row-> tahun_terbit }}</td>
            <td>
              <a href="#"><span>Edit</span></a> !
              <a href="#"><span>Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
