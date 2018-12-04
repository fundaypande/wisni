<?php require_once("auth.php"); ?>
<?php
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_user.php');
?>
<body>
<?php
  $idUser = $_GET['id'];
	$pdo_statement = $db->prepare("SELECT * FROM gambar WHERE id_user = $idUser ORDER BY id_gambar DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>

<?php

if(!empty($result)) {
  foreach($result as $row) {
?>
  <h2>ID Gambar: <?php echo $row["id_gambar"] ?></h2>
  <p></p>
  <br>
  <center>
    <img width="70%" src="<?php echo $row["url"] ?>" alt="gambar">
    <p><?php echo $row["url"] ?></p>
  </center>

  <br>

  <?php
  }
}
?>


<?php
  include('template/header.php');
?>
