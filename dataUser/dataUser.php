<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <center><h1>Data User</h1>
    <table border = "1" width = "80%"></center>
    <tr>
        <th bgcolor = "grey">ID_User</th>
        <th bgcolor = "grey">Nama</th>
        <th bgcolor = "grey">Alamat</th>
        <th bgcolor = "grey">Telp</th>
        <th bgcolor = "grey">Level User</th>
    </tr>
    <?php include "koneksi.php";

    $query = "SELECT * FROM sembarang";
    $sql = mysqli_query($connect, $query);

    while ($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>" . $data['ID_User'] . "</td>";
    echo "<td>" . $data['Nama'] . "</td>";
    echo "<td>" . $data['Alamat'] . "</td>";
    echo "<td>" . $data['Telp'] . "</td>";
    echo "<td>" . $data['Level_User'] . "</td>";
    echo "</tr>";
    }
    ?>
    </table>
</body>
</html>