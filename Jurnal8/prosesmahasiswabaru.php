<?php
require("koneksi.php");
?>
<?php
    if(isset($_POST['nim'])){
        $nama =$_POST['nama'];
        $nim =$_POST['nim'];
        $jk =$_POST['jk'];
        $program = $_POST['program'];
        $fakultas = $_POST['fakultas'];
        $asal = $_POST['asal'];
        $moto = $_POST['moto'];
    
$query =$pdo ->prepare("INSERT INTO mahasiswa(nama,nim,jenis_kelamin,program_studi,fakultas,asal,moto) VALUES ('$nama','$nim','$jk','$program','$fakultas','$asal','$moto')");
$query -> execute();
    if($query)
        header("location:lihatdata.php");
    else{
        die("Tambah Data Gagal");  
      }
}    
    
?>