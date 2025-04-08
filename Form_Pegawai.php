<!DOCTYPE html>
<html lang="id">
<head>
     <title>INFORMASI PEGAWAI</title>
</head>
<body>
     <h1>INFORMASI PEGAWAI</h1>
     <form method="get" action="daftar_pegawai.php">
          <table rules="rows">
               <tr>
                    <td>NIP</td>
                    <td><input type="text" name="Kode_Pegawai" value="<?php echo isset($_GET['Kode_Pegawai']) ? $_GET['Kode_Pegawai'] : ''; ?>"></td>
               </tr>
               <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama_Pegawai" value="<?php echo isset($_GET['Nama_Pegawai']) ? $_GET['Nama_Pegawai'] : ''; ?>"></td>
               </tr>
               <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                         <input type="radio" name="sts" value="Pria" <?php echo (isset($_GET['sts']) && $_GET['sts'] == 'Pria') ? 'checked' : ''; ?>> Pria
                         <input type="radio" name="sts" value="Wanita" <?php echo (isset($_GET['sts']) && $_GET['sts'] == 'Wanita') ? 'checked' : ''; ?>> Wanita
                    </td>
               </tr>
               <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="Tanggal_Lahir" value="<?php echo isset($_GET['Tanggal_Lahir']) ? $_GET['Tanggal_Lahir'] : ''; ?>"></td>
               </tr>
               <tr>
                    <td>Hobi</td>
                    <td>
                         <input type="checkbox" name="hobi[]" value="Olahraga" <?php echo (isset($_GET['hobi']) && in_array('Olahraga', $_GET['hobi'])) ? 'checked' : ''; ?>> Olahraga
                         <input type="checkbox" name="hobi[]" value="Baca" <?php echo (isset($_GET['hobi']) && in_array('Baca', $_GET['hobi'])) ? 'checked' : ''; ?>> Baca
                         <input type="checkbox" name="hobi[]" value="Seni Musik" <?php echo (isset($_GET['hobi']) && in_array('Seni Musik', $_GET['hobi'])) ? 'checked' : ''; ?>> Seni Musik
                         <input type="checkbox" name="hobi[]" value="Jalan-jalan" <?php echo (isset($_GET['hobi']) && in_array('Jalan-jalan', $_GET['hobi'])) ? 'checked' : ''; ?>> Jalan-jalan
                         <input type="checkbox" name="hobi[]" value="Seni Gambar" <?php echo (isset($_GET['hobi']) && in_array('Seni Gambar', $_GET['hobi'])) ? 'checked' : ''; ?>> Seni Gambar
                    </td>
               </tr>
               <tr>
                    <td>Alamat</td>
                    <td><textarea name="Alamat" rows="5" cols="40" readonly><?php echo isset($_GET['Alamat']) ? $_GET['Alamat'] : ''; ?></textarea></td>
               </tr>
          </table>
          <br>
          <button type="submit" name="batal" value="batal">Batal</button>
     </form>
</body>
</html>

