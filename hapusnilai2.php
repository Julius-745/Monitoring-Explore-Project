<?php
 $koneksi-> query("DELETE FROM plts2 WHERE id='$_GET[id]'");
  echo "<script>location='index.php?page=plts2'; </script>";
 ?>