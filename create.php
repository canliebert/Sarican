<?php
include 'header.php';
?>
<head>
    <title>Tambah data</title>
</head>
<div class="container">
    <form action="process.php?param=create" enctype="multipart/form-data" method="post">
        <div class="col-6">
                        <label class="name">Nama</label>
                        <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" >
            </div>

            <div class="col-6">
                
                        <label for="phone">No. hp</label>
                        <input type="text" class="form-control" name="phone">
            </div>

            <div class="col-6">
                        <label for="date">Tanggal</label>
                        <input type="text" class="form-control" name="date" value="<?php
                        $currentDateTime = date("Y-m-d H:i:s");
                        echo "" . $currentDateTime;
                         ?>">
            </div>

            
            <div class="col-6">
                
                        <label for="gambar">No. hp</label>
                        <input type="file" class="form-control" name="gambar">
            </div>

                <button type="submit" name="submit" class="btn btn-primary"> Tambah data!</button>

        </div>
    </form>
</div>


<?php
include 'footer.php';
?>