<?php require_once("auth.php"); ?>
<?php
  require_once("config.php");
   include('template/header.php');
   include('template/sidebar_user.php');
?>


<body>

  <h1>Form Upload Gambar</h1>
    <form method="post" enctype="multipart/form-data" action="upload_gambar.php">
      <input type="file" name="gambar">
      <input type="submit" value="Upload">
    </form>
