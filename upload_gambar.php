<?php
// Load file koneksi.php
require_once("auth.php");
require_once("config.php");
 include('template/header.php');
 include('template/sidebar_user.php');
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];


// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
$goto = 'window.location.href="show_gambar.php?id=' . $_SESSION["user"]["id"]  . '";';
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 2000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :
      // Proses simpan ke Database

      $sql = "INSERT INTO gambar ( id_gambar, url, keterangan, id_user ) VALUES ( NULL, :url, :keterangan, :user)";
    	$pdo_statement = $db->prepare( $sql );

    	$result = $pdo_statement->execute( array( ':url'=>$path, ':keterangan'=>$tipe_file, ':user'=>$_SESSION["user"]["id"] ) );

      if (!empty($result) ){
        echo '<script language="javascript">';
        echo 'alert("Gambar Berhasil Diinputkan");';
        echo $goto;
        echo '</script>';
    	}else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='form.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='form.php'>Kembali Ke Form</a>";
}
?>
