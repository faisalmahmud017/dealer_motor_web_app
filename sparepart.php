<?php
  include ('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<html>
<head>
    <title>Spare Part</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <div id="header">
                <h1>MATEL DEALER</h1>
            </div>
            <div id="sidebar">
                <ul>
                    <li class="sidebar-pilihan"><a href="index.php">Home</a></li>
                    <li class="sidebar-pilihan"><a href="katalog.php">Katalog</a></li>
                    <li class="sidebar-pilih">Spare Part</li>
                    <li class="sidebar-pilihan"><a href="tentang.php">Tentang</a></li>
                </ul>
            </div>
            <div id="content">
                 <table>
                     <thead>
                              <tr>
                                  <th></th>
                                <th>Nama</th>
                                <th>Merek</th>
                                <th>Harga</th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                      
                            <?php
                            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nomor
                            $query = "SELECT * FROM sparepart ORDER BY id ASC";
                            $result = mysqli_query($koneksi, $query);
                            //mengecek apakah ada error ketika menjalankan query
                            if(!$result){
                              die ("Query Error: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                            }
                      
                            //buat perulangan untuk element tabel dari data
                            $no = 1; //variabel untuk membuat nomor urut
                            
                            // hasil query akan disimpan dalam variabel $data dalam bentuk array
                            while($row = mysqli_fetch_assoc($result)) // kemudian dicetak dengan perulangan while
                            {
                            ?>
                             <tr>
                             <td style="text-align: center;"><img class="gambar" src="admin/gambar/<?php echo $row['gambar']; ?>" style="width: 150px;"></td>
                                <td><?php echo $row['nama']; ?></td> <!-- Pemanggilan nama produk -->
                                <td><?php echo $row['merek']; ?></td> <!-- Pemanggilan merek produk-->
                                <td>Rp <?php echo number_format($row['harga'],0,',','.'); ?></td> <!-- Pemanggilan harga produk -->
                                <td><a href="lihat-sparepart.php?id=<?php echo $row['id']; ?>">Lihat</a></td>
                            </tr>
                               
                            <?php
                              $no++; //untuk nomor urut terus bertambah 1
                            }
                            ?>
                          </tbody>
                          </table>
            </div>
            <div id="footer">
                
            </div>
</body>
</html>