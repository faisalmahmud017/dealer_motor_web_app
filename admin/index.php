<?php
  include('../koneksi.php'); //memanggil file koneksi ke database
  
?>

<html>
<head>
    <title>Data Motor</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
session_start();
if ($_SESSION['status']!="login") {
    header("location:index.php?pesan=belum_login");
}
?>
<body>
            <div id="sidebar">
            <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li>Motor</a></li>
                    <li><a href="sparepart.php">Spare Part</a></li>
                </ul>
            </div>
            <div id="content">
                <center><h1>Data Motor</h1><center>
                    <br/>
                    <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a><center>
                <table>
                    <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Merek</th>
                                <th>Jenis</th>
                                <th>Spesifikasi</th>
                                <th>Stock</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
                            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nomor
                            $query = "SELECT * FROM produk ORDER BY id ASC";
                            $result = mysqli_query($koneksi, $query);
                            //mengecek apakah ada error ketika menjalankan query
                            if(!$result){
                              die ("Query Error: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                            }
                      
                            //buat perulangan untuk element tabel dari data
                            $no = 1; //variabel untuk membuat nomor urut
                            // hasil query akan disimpan dalam variabel $data dalam bentuk array
                            // kemudian dicetak dengan perulangan while
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                             <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['merek']; ?></td>
                                <td><?php echo $row['jenis']; ?></td>
                                <td><?php echo $row['spesifikasi']; ?></td>
                                <td><?php echo number_format($row['stok'],0,',','.'); ?></td>
                                <td>Rp. <?php echo number_format($row['harga'],0,',','.'); ?></td>
                                <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
                                <td>
                                    <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
                                    <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                               
                            <?php
                              $no++; //untuk nomor urut terus bertambah 1
                            }
                            ?>
                          </tbody>
                          </table>
            </div>
</body>
</html>