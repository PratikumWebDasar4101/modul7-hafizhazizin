<?php
require("koneksi.php");
?>
<form method="post" value="search">
Search : <input type="text" name="search"><input type="submit" value="search">
</form>
    <table border="1">
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Opsional</th>
        <?php
        @$search =$_POST['search'];
        $no=1;
        $query = $pdo -> prepare("SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'");
        $query -> execute();
        while($data =$query -> fetch(PDO :: FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['nim'];?></td>
            <td><a href="delete.php?id=<?php echo $data['nim']?>">Hapus</a></td>
    </tr>
        <?php
             $no++;
     }
         ?>        
</table>
<a href="mahasiswabaru.php">Kembali ke Pendaftaran</a>
