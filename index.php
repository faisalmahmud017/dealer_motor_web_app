<?php
  include ('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<html>
<head>
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <div id="header">
                <h1>MATEL DEALER</h1>
            </div>
            <div id="sidebar">
                <ul>
                    <li class="sidebar-pilih">Home</li>
                    <li class="sidebar-pilihan"><a href="katalog.php">Katalog</a></li>
                    <li class="sidebar-pilihan"><a href="sparepart.php">Spare Part</a></li>
                    <li class="sidebar-pilihan"><a href="tentang.php">Tentang</a></li>
                </ul>
            </div>
            <div id="content">
            <div id="slider">
	<div id="slide-holder">
	  	<div class="slide"><img class="image" src="admin/gambar/xGWpPJSS8uQG53UGSRCk.png"  /></div>
	    <div class="slide"><img class="image" src="admin/gambar/fitur-motor-vario-150-2017-new.png" /></div>
	    <div class="slide"><img class="image" src="admin/gambar/xGWpPJSS8uQG53UGSRCk.png" alt="" /></div> 
	    <div class="slide"><img class="image" src="admin/gambar/fitur-motor-vario-150-2017-new.png" /></div>
	    <div class="slide"><img class="image" src="admin/gambar/xGWpPJSS8uQG53UGSRCk.png"  /></div>
  </div>

            </div><br>
            <h4 style="color: #11233b;">promo akhir tahun!</h4>
            <h1 style="color: red; font-size: 45pt;">Cicilan BUNGA 0%</h1>
            <i style="font-size: 11px;color: red">*Syarat & Ketentuan Berlaku</i>
            <div id="footer">
                
            </div>
</body>
</html>