<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $merek     = $_POST['merek'];
  $stok    = $_POST['stok'];
  $harga    = $_POST['harga'];
  $gambar = $_FILES['gambar']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO sparepart (nama, merek, stok, harga, gambar) VALUES ('$nama', '$merek', '$stok', '$harga', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periksa query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman sparepart.php
                    echo "<script>alert('Data berhasil ditambah.');window.location='sparepart.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk_sparepart.php';</script>";
            }
} else {
   $query = "INSERT INTO sparepart (nama, merek, stok, harga, gambar) VALUES ('$nama', '$merek', '$stok', '$harga', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman sparepart.php
                    echo "<script>alert('Data berhasil ditambah.');window.location='sparepart.php';</script>";
                  }
}

 

