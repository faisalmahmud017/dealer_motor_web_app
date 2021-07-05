<?php
  include ('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<html>
<head>
    <title>Motor</title>
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
                    <li class="sidebar-pilihan"><a href="sparepart.php">Spare Part</a></li>
                    <li class="sidebar-pilihan"><a href="tentang.php">Tentang</a></li>
                </ul>
            </div>
            <div id="content">
                <h3>Detail</h3>
                <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
  <center>
        <h1><?php echo $data['nama']; ?></h1>
      <center>
      <section class="base">
      <table>
<tr>
<td rowspan="7"><img src="admin/gambar/<?php echo $data['gambar_produk']; ?>" style="width: 300px;float: left;margin-bottom: 5px;"></td>
</tr>
<tr>
<td>Merek</td>
<td>:</td>
<td><?php echo $data['merek']; ?></td>
</tr>
<tr>
<td>Jenis</td>
<td>:</td>
<td><?php echo $data['jenis']; ?></td>
</tr>
<tr>
<tr>
<td>Spesifikasi</td>
<td>:</td>
<td><?php echo $data['spesifikasi']; ?></td>
</tr>
<tr>
<td>Stock</td>
<td>:</td>
<td><?php echo $data['stok']; ?></td>
</tr>
<tr>
    <td>Harga</td>
    <td>:</td>
    <td>Rp. <?php echo number_format ($data['harga'],0,',','.'); ?></td>
</tr>
</table>
        
        </section>
            </div>
            <div id="footer">
                
            </div>
</body>
</html>