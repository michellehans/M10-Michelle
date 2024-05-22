<h3> Data Pengguna </h3>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        padding: 20px;
    }
    h3 {
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table th, table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }
    table th {
        background-color: #f8f8f8;
    }
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table tr:hover {
        background-color: #f1f1f1;
    }
</style>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM tbuser");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>{$no}</td>
            <td>{$tampil['nama_lengkap']}</td>
            <td>{$tampil['username']}</td>
            <td>{$tampil['tempat_lahir']}</td>
            <td>{$tampil['tanggal_lahir']}</td>
            <td>{$tampil['alamat']}</td>
            <td>{$tampil['no_telepon']}</td>
            <td>{$tampil['email']}</td>
        </tr>";
        $no++;
    }
    ?>
</table>

