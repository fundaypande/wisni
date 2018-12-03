<?php require_once("auth.php"); ?>
<?php
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_admin.php');
?>
<body>
<?php
  $idTanaman = $_GET['id'];
	$pdo_statement = $db->prepare("SELECT * FROM ttanaman WHERE id_tanaman=$idTanaman");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a class="btn btn-primary" href="jenis_tanaman_add.php" class="button_link"> Tambah Data Tanaman </a></div>

	<?php

	if(!empty($result)) {
		foreach($result as $row) {
	?>
    <h2>ID Tanaman: <?php echo $row["id_tanaman"] ?></h2>
    <h2>Nama Tanaman: <?php echo $row["nama"] ?></h2>
    <h3>Budidaya:</h3>
    <br>
    <p><?php echo $row["keterangan"]; ?></p>

    <h3>Penyakit:</h3>
    <?php
      $pdo_statement2 = $db->prepare("SELECT * FROM tpenyakit WHERE id_tanaman=$idTanaman");
      $pdo_statement2->execute();
      $result2 = $pdo_statement2->fetchAll();
      $no = 1;
      if(!empty($result2)) {
    		foreach($result2 as $row2) {
          echo $no . ".   ";
          echo $row2["nama"] . ": ";
          echo $row2["keterangan"];
          echo "<br />";
          $no++;
        }
      }
     ?>

     <br>


     <h3>Pengolahan:</h3>
     <?php
       $pdo_statement3 = $db->prepare("SELECT * FROM tpengolahan WHERE id_tanaman=$idTanaman");
       $pdo_statement3->execute();
       $result3 = $pdo_statement3->fetchAll();
       $no = 1;
       if(!empty($result3)) {
     		foreach($result3 as $row3) {
           echo $no . ".   ";
           echo $row3["nama"] . ": ";
           echo $row3["keterangan"];
           echo "<br />";
           $no++;
         }
       }
      ?>



    <?php
		}
	}
	?>


<?php
  include('template/header.php');
?>
