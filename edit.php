<?php
include 'header.php';
include 'koneksi.php';


    $id = $_GET["id"];

$sql = "SELECT * FROM user WHERE id= $id";
$result = $conn->query($sql);
?>
<head>
    <title>Tambah data</title>
</head>
<div class="container">
    <form action="process.php?param=update&id=" method="post">
        <div class="col-6">
                <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                        <label class="name">Nama</label>
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                        <input type="text" name="name" class="form-control" required value="<?= $row["name"] ?>">
            </div>
            <div class="col-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required value="<?= $row["email"] ?>">
            </div>

            <div class="col-6">
                
                        <label for="phone">No. hp</label>
                        <input type="text" class="form-control" name="phone" required value="<?= $row["phone"] ?>">
            </div>

            <div class="col-6">
                        <label for="date">Tanggal</label>
                        <input type="text" class="form-control" name="date" value="<?php
                        $currentDateTime = date("Y-m-d H:i:s");
                        echo "" . $currentDateTime;
                         ?>">
            </div>
            <?php endwhile; ?>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

        </div>
    </form>
</div>


<?php
include 'footer.php';
?>