<?php
  require_once("auth.php");
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');


   if(!isset($_GET['id'])){
         die("Error: ID Tidak Dimasukkan");
     }
     $query = $db->prepare("SELECT * FROM `ttanaman` WHERE id_tanaman = :id");
     $query->bindParam(":id", $_GET['id']);
     $query->execute();
     if($query->rowCount() == 0){
         die("Error: ID Tidak Ditemukan");
     }else{
         $data = $query->fetch();
     }
     if(isset($_POST['submit'])){
         $nama = htmlentities($_POST['nama']);
         $keterangan = htmlentities($_POST['keterangan']);
         $query = $db->prepare("UPDATE `ttanaman` SET `nama`=:nama,`keterangan`=:keterangan WHERE `id_tanaman`=:id");
         $query->bindParam(":nama", $nama);
         $query->bindParam(":keterangan", $keterangan);
         $query->bindParam(":id", $_GET['id']);
         $query->execute();
         echo '<script language="javascript">';
         echo 'alert("Tanaman Berhasil Diedit"); window.location.href="jenis_tanaman.php";';
         echo '</script>';
     }
?>

<div style="margin:20px 0px;text-align:right;"><a href="jenis_tanaman.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Edit Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Nama: </label><br>
  	  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" required />
    </div>
  </div>
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Budidaya: </label><br>
      <textarea name="keterangan" class="form-control" rows="5" required ><?php echo $data['keterangan'] ?></textarea>
    </div>
  </div>
  <br>
    <div class="demo-form-row">
  	  <input name="submit" type="submit" value="Edit" class="btn btn-primary">
    </div>

  </form>
</div>
