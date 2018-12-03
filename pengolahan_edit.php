<?php
  require_once("auth.php");
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');


   if(!isset($_GET['id'])){
         die("Error: ID Tidak Dimasukkan");
     }
     $query = $db->prepare("SELECT DISTINCT id_tanaman, ttanaman.nama AS 'tanaman', tpengolahan.nama, tpengolahan.keterangan FROM tpengolahan INNER JOIN ttanaman USING(id_tanaman) WHERE id_pengolahan = :id");
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
         $tanaman = htmlentities($_POST['tanaman']);
         $query = $db->prepare("UPDATE `tpengolahan` SET `nama`=:nama,`keterangan`=:keterangan, `id_tanaman`=:tanaman WHERE `id_pengolahan`=:id");
         $query->bindParam(":nama", $nama);
         $query->bindParam(":keterangan", $keterangan);
         $query->bindParam(":tanaman", $tanaman);
         $query->bindParam(":id", $_GET['id']);
         $result = $query->execute();
         if (!empty($result) ){
           echo '<script language="javascript">';
           echo 'alert("Tanaman Berhasil Diedit"); window.location.href="pengolahan.php";';
           echo '</script>';
         }
     }
?>

<div style="margin:20px 0px;text-align:right;"><a href="jenis_tanaman.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Edit Record</h1>
<form name="frmAdd" action="" method="POST">

  <div class="dropdown">
  <select class="form-control" name="tanaman">
    <option>Pilih Jenis Tanaman</option>
    <option class="dropdown-item" value="<?php echo $data['id_tanaman']; ?>" selected><?php echo $data['id_tanaman']; echo " - "; echo $data['tanaman']; ?></option>

    <?php
    	$pdo_statement = $db->prepare("SELECT * FROM ttanaman ORDER BY id_tanaman DESC");
    	$pdo_statement->execute();
    	$result = $pdo_statement->fetchAll();
    ?>

    <?php
  	if(!empty($result)) {
  		foreach($result as $row) {
  	?>

      <option class="dropdown-item" value="<?php echo $row["id_tanaman"]; ?>"><?php echo $row["id_tanaman"]; echo" - "; echo $row["nama"];?></option>
      <?php
  		}
  	}
  	?>
  </select>
  </div>

  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Nama Pengolahan: </label><br>
  	  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" required />
    </div>
  </div>
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Pengolahan: </label><br>
      <textarea name="keterangan" class="form-control" rows="5" required ><?php echo $data['keterangan'] ?></textarea>
    </div>
  </div>
  <br>
    <div class="demo-form-row">
  	  <input name="submit" type="submit" value="Edit" class="btn btn-primary">
    </div>

  </form>
</div>
