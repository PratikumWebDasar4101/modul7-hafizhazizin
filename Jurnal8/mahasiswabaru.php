<form action="prosesmahasiswabaru.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="25" required></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" pattern="\d*" maxlength="10" min="0" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>Pria<input type="radio" name="jk" value="Pria">
                Wanita<input type="radio" name="jk" value="Wanita" value=""></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td> <select name="program" value="">
                    <option value="s1sisteminformasi">S1 Sistem Informasi</option>
                    <option value="d3manajemeninformatika">D3 Manajemen Informatika</option>
                    <option value="d3teknikkomputer">D3 Teknik Komputer</option>
                    <option value="d4desainkomunikasivisual">D4 Desain Komunikasi Visual</option>
                    <option value="d3perhotelan">D3 Perhotelan</option>
                </select></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><select name="fakultas" value="">
                    <option value="FIT">FIT</option>
                    <option value="FKB">FKB</option>
                    <option value="FIK">FIK</option>
                    <option value="FTE">FTE</option>
                    <option value="FRI">FRI</option>
                    <option value="FIF">FIF</option>
              </select></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>:</td>
            <td><input type="text" name="asal"></td>
        </tr>
        <tr>
            <td>Moto Hidup</td>
            <td>:</td>
            <td><textarea name="moto" id="" cols="30" rows="10" ></textarea ></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
            <td></td>
            <td><a href="halamanutama.php">Ke Halaman Utama</a></td>
        </tr>
    </table>
</form>
<?php