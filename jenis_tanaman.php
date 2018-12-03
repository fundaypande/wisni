<?php require_once("auth.php"); ?>
<?php
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');
?>
<body>
<?php
	$pdo_statement = $db->prepare("SELECT * FROM `ttanaman` ORDER BY id_tanaman DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a class="btn btn-primary" href="jenis_tanaman_add.php" class="button_link"> Tambah Data Tanaman </a></div>
<table class="table">
  <thead>
	<tr>
	  <th class="table-header" width="10%">Id Tanaman</th>
	  <th class="table-header" width="20%">Nama</th>
	  <th class="table-header" width="60%">Budidaya</th>
	  <th class="table-header" width="10%">Actions</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) {
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><a href="show_tanaman.php?id=<?php echo $row['id_tanaman']; ?>"><?php echo $row["id_tanaman"]; ?></a></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["keterangan"]; ?></td>
		<td>
      <a style="color:blue" class="ajax-action-links" href="jenis_tanaman_edit.php?id=<?php echo $row['id_tanaman']; ?>">
        Edit
      </a>
      <a style="color: red" class="ajax-action-links" onclick="return  confirm('Apakah anda yakin ingin menghapus?')" href='jenis_tanaman_delete.php?id=<?php echo $row['id_tanaman']; ?>'>
        Delete
      </a>
      <a style="color: green" class="ajax-action-links" href='show_tanaman.php?id=<?php echo $row['id_tanaman']; ?>'>
        Show
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
