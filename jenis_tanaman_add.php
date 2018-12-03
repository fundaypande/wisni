
<?php
  require_once("auth.php");
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');

   $id_user = $_SESSION["user"]["id"];

if(!empty($_POST["add_record"])) {
	$sql = "INSERT INTO ttanaman ( id_tanaman, nama, keterangan, id ) VALUES ( NULL, :nama, :keterangan, $id_user)";
	$pdo_statement = $db->prepare( $sql );

	$result = $pdo_statement->execute( array( ':nama'=>$_POST['nama'], ':keterangan'=>$_POST['ket'] ) );
	if (!empty($result) ){
    echo '<script language="javascript">';
    echo 'alert("Tanaman Berhasil Diinputkan")';
    echo '</script>';
	}
}
?>

<div style="margin:20px 0px;text-align:right;"><a href="jenis_tanaman.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Add New Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Nama: </label><br>
  	  <input type="text" name="nama" class="form-control" required />
    </div>
  </div>
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Budidaya: </label><br>
      <textarea name="ket" class="form-control"  rows="5" required ></textarea>
    </div>
  </div>
  <br>
    <div class="demo-form-row">
  	  <input name="add_record" type="submit" value="Add" class="btn btn-primary">
    </div>

  </form>
</div>
