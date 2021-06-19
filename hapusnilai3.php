<?php
 $koneksi-> query("DELETE FROM plts3 WHERE id='$_GET[id]'");
  echo "<script>location='index.php?page=plts3'; </script>";
 ?>