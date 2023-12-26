<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE  id = $id";

$result = $conn->query($sql);

$_SESSION['message'] = "Data berhasil dihapus";
$_SESSION['msg_type'] = "danger";
}
return header("Location: index.php");

?>