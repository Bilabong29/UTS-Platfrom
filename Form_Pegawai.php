<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>INFORMASI PEGAWAI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            margin: 20px 0;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 6px;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body>

    <h1>INFORMASI PEGAWAI</h1>

    <form method="get" action="daftar_pegawai.php">
        <table>
            <tr>
                <td><label for="Kode_Pegawai">NIP</label></td>
                <td><input type="text" name="Kode_Pegawai" id="Kode_Pegawai"
                    value="<?php echo isset($_GET['Kode_Pegawai']) ? $_GET['Kode_Pegawai'] : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama_Pegawai">Nama</label></td>
                <td><input type="text" name="Nama_Pegawai" id="Nama_Pegawai"
                    value="<?php echo isset($_GET['Nama_Pegawai']) ? $_GET['Nama_Pegawai'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="sts" value="Pria"
                            <?php echo (isset($_GET['sts']) && $_GET['sts'] == 'Pria') ? 'checked' : ''; ?>> Pria
                    </label>
                    <label>
                        <input type="radio" name="sts" value="Wanita"
                            <?php echo (isset($_GET['sts']) && $_GET['sts'] == 'Wanita') ? 'checked' : ''; ?>> Wanita
                    </label>
                </td>
            </tr>
            <tr>
                <td><label for="Tanggal_Lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="Tanggal_Lahir" id="Tanggal_Lahir"
                    value="<?php echo isset($_GET['Tanggal_Lahir']) ? $_GET['Tanggal_Lahir'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <?php
                        $hobiList = ["Olahraga", "Baca", "Seni Musik", "Jalan-jalan", "Seni Gambar"];
                        foreach ($hobiList as $hobi) {
                            $checked = (isset($_GET['hobi']) && in_array($hobi, $_GET['hobi'])) ? 'checked' : '';
                            echo "<label><input type='checkbox' name='hobi[]' value='$hobi' $checked> $hobi</label><br>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="Alamat">Alamat</label></td>
                <td>
                    <textarea name="Alamat" id="Alamat" rows="5" readonly><?php echo isset($_GET['Alamat']) ? $_GET['Alamat'] : ''; ?></textarea>
                </td>
            </tr>
        </table>
        <button type="submit" name="batal" value="batal">Batal</button>
    </form>

</body>
</html>
