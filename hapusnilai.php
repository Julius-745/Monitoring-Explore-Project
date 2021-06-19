<?php
$koneksi->query("DELETE FROM sensor WHERE id='$_GET[id]'");
echo "<script>location='index.php?page=plts1'; </script>";
