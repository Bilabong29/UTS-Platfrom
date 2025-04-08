<!DOCTYPE html>
<html>

<head>
     <title>Daftar Pegawai</title>
     <style>
          table {
               border-collapse: collapse;
               width: 100%;
          }

          th,
          td {
               border: 1px solid black;
               padding: 8px;
               text-align: left;
          }

          th {
               background-color: #f2f2f2;
          }
     </style>
</head>

<body>
     <h2>Daftar Pegawai</h2>
     <table>
          <tr>
               <th>Kode Pegawai</th>
               <th>Nama Pegawai</th>
               <th>Jenis Kelamin</th>
               <th>Tanggal Lahir</th>
               <th>Hobi</th>
               <th>Alamat</th>
               <th>Action</th>
          </tr>
          <?php
          // Keterangan :
          // a. array indek 0 = Kode pegawai
          // b. array indek 1 = Nama pegawai
          // c. array indek 2 = Jenis kelamin
          // d. array indek 3 = Tanggal lahir
          // e. array indek 4 = Hobi
          // f. array indek 5 = Alamat

          // Pegawai 1
          $arrPegawai[0][0] = "12345678";
          $arrPegawai[0][1] = "Imelda Putri";
          $arrPegawai[0][2] = "Wanita";
          $arrPegawai[0][3] = "20 Oktober 2000";
          $arrPegawai[0][4] = "Olahraga,Baca,Seni Musik";
          $arrPegawai[0][5] = "Jl Paingan No 123 Yogyakarta";
          // Pegawai 2
          $arrPegawai[1][0] = "12345679";
          $arrPegawai[1][1] = "Pratama Andika";
          $arrPegawai[1][2] = "Pria";
          $arrPegawai[1][3] = "3 Juni 2001";
          $arrPegawai[1][4] = "Jalan-jalan,Baca";
          $arrPegawai[1][5] = "Jl Tasura No 123 Yogyakarta";
          // Pegawai 3
          $arrPegawai[2][0] = "12345680";
          $arrPegawai[2][1] = "Sheila Putri";
          $arrPegawai[2][2] = "Wanita";
          $arrPegawai[2][3] = "5 Januari 2000";
          $arrPegawai[2][4] = "Seni Gambar";
          $arrPegawai[2][5] = "Jl Merdeka No 123 Yogyakarta";
          // Pegawai 4
          $arrPegawai[3][0] = "12345681";
          $arrPegawai[3][1] = "Viktor Setiawan";
          $arrPegawai[3][2] = "Pria";
          $arrPegawai[3][3] = "9 Juni 2001";
          $arrPegawai[3][4] = "Jalan-jalan,Seni Gambar";
          $arrPegawai[3][5] = "Jl Anggrek 123 Yogyakarta";

          foreach ($arrPegawai as $pegawai) {
               echo "<tr>";
               foreach ($pegawai as $data) {
                    echo "<td>" . htmlspecialchars($data) . "</td>";
               }
               echo "<td colspan='7' align='center'>";
               echo "<a href='Form_Pegawai.php'>Detail Pegawai</a>";
               echo "</tr>";}


          ?>
     </table>
</body>

</html>