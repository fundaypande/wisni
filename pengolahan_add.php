
<?php
  require_once("auth.php");
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');

   $id_user = $_SESSION["user"]["id"];

if(!empty($_POST["add_record"])) {
	$sql = "INSERT INTO tpengolahan ( id_pengolahan, nama, keterangan, id_tanaman ) VALUES ( NULL, :nama, :keterangan, :tanaman)";
	$pdo_statement = $db->prepare( $sql );

	$result = $pdo_statement->execute( array( ':nama'=>$_POST['nama'], ':keterangan'=>$_POST['ket'], ':tanaman'=>$_POST['tanaman'] ) );
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

  <div class="dropdown">
  <select class="form-control" name="tanaman">
    <option>Pilih Jenis Tanaman</option>

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
  	  <input type="text" name="nama" class="form-control" required />
    </div>
  </div>
  <div class="class="form-group"">
    <div class="demo-form-row">
  	  <label>Keterangan: </label><br>
      <textarea name="ket" class="form-control"  rows="5" required ></textarea>
    </div>
  </div>
  <br>
    <div class="demo-form-row">
  	  <input name="add_record" type="submit" value="Add" class="btn btn-primary">
    </div>

  </form>
</div>
