<?php 
include 'header.php';
include 'koneksi.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);



?>
<head>
  <title>Admin page</title>
</head>

          
          <form action="" method="post">
            
          </form>
          

          <div class="container">

          <?php
          if(isset($_SESSION['message'])) {
            echo '<div class="alert alert-primary" role="alert">
            '.$_SESSION['message'].'
          </div>';
          unset($_SESSION['message']);
          }
          ?>

            <div class="row">
              <div class="col-12">



                <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>
      
                      <th>Action</th>
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row["name"]; ?></td>
                      <td><?= $row["email"]; ?></td>
                      <td><?= $row["phone"]; ?></td>
                      <td><?= $row["date"]; ?></td>

                      <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" type="button" class="btn btn-success">Edit</a>
                        <a href="process.php?param=delete&id=<?= $row['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endwhile; ?>
                </table>
              </div>
            </div>
         </div>

         <a href="create.php" type="button" class="btn btn-primary">Tambah data</a>


<?php
include 'footer.php';
?>

    