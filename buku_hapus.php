<?php
$id = $_GET['id_buku'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");


?>
<script>
    alert('Hapus data berhasil');
    location.href = "index.php?page=buku";
</script>
