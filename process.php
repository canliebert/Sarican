<?php
include 'user.php';

$classfunction = new User();

// if (isset($_GET['param'])) {
    if ($_GET['param'] == 'create') {
        return $classfunction->createdata(
              $_POST["name"],
              $_POST["email"],
              $_POST["phone"],
              $_POST["date"],
              $_FILES["gambar"]
        );
    
    }

    if ($_GET['param'] == 'update') {
        return $classfunction->updatedata(   
        $_POST['id'],
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['date']
        );
        
    }

    if ($_GET['param'] == 'delete') {
        return $classfunction->deleteData($_POST['id']);
            
    }
    

  

?>