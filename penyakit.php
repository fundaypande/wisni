<?php require_once("auth.php"); ?>
<?php
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');
?>
<body>
<?php
	$pdo_statement = $db->prepare("SELECT tpenyakit.id_penyakit, ttanaman.nama AS 'tanaman', tpenyakit.nama, tpenyakit.keterangan FROM tpenyakit INNER JOIN ttanaman USING(id_tanaman) ORDER BY id_penyakit DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a class="btn btn-primary" href="penyakit_add.php" class="button_link"> Tambah Data Penyakit </a></div>
<table class="table">
  <thead>
	<tr>
	  <th class="table-header" width="10%">Id Penyakit</th>
	  <th class="table-header" width="20%">Nama Tanaman</th>
	  <th class="table-header" width="20%">Nama Penyakit</th>
    <th class="table-header" width="40%">Keterangan Penyakit</th>
	  <th class="table-header" width="10%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) {
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["id_penyakit"]; ?></td>
		<td><?php echo $row["tanaman"]; ?></td>
    <td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["keterangan"]; ?></td>
		<td>
      <a style="color:blue" class="ajax-action-links" href="penyakit_edit.php?id=<?php echo $row['id_penyakit']; ?>">
        Edit
      </a>
      <a style="color: red" class="ajax-action-links" onclick="return  confirm('Apakah anda yakin ingin menghapus?')" href='penyakit_delete.php?id=<?php echo $row['id_penyakit']; ?>'>
        Delete
      </a>
    </td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>


<?php
  include('template/header.php');
?>
