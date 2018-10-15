<?php
include("koneksi.php");
if(isset($_GET['id'])){
    $nim =$_GET['id'];

    $query = $pdo -> prepare("DELETE FROM mahasiswa WHERE nim ='$nim'");
    $query -> execute();

    if($query){
        ?>
        <script>
            alert("data Berhasil Terhapus");
            location ="lihatdata.php";
        </script>
        <?php
    } else{
        ?>
        <script>
            alert("Data gagal Terhapus");
            location="lihatdata.php";
        </script>
        <?php
    }      
}
?>