<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <center><h1>Data Siswa X RPL</h1>

    <table border="1" width="80%"></center>
    <tr>
        <th bgcolor="aqua">nis</th>
        <th bgcolor="aqua">nama</th>
        <th bgcolor="aqua">kelas</th>
        <th bgcolor="aqua">jurusan</th>
        <th bgcolor="aqua">alamat</th>
    </tr>

    <?php
    include "koneksi.php";

    $query = "SELECT*FROM siswa";
    $sql = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($sql)){

        echo "<tr>";
        echo "<td>".$data['nis']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "<td>".$data['jurusan']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<tr>";
    }
    ?>
    </table>
</body>
</html>