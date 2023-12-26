<?php 

include 'user.php';

session_start();
if(!isset($_SESSION['data'])) {
  return header("location: login.php");
}

?>



<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- bootstrap 5 css -->
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <style>
    li {
        list-style: none;
        margin: 20px 0 20px 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
    }

    .active-main-content {
        margin-left: 250px;
    }

    .active-sidebar {
        margin-left: 0;
    }

    #main-content {
        transition: 0.4s;
    }
    </style>


      </head>
      <body>
        <div>
          <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">Data Siswa</h4>
            <li>
              <a class="text-white" href="index.php">
                <i class="bi bi-house mr-2"></i>
                Beranda
              </a>
            </li>
            <li>
              <a class="text-white" href="create.php">
              <i class="bi bi-plus-square"></i>
              Add               
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-newspaper mr-2"></i>
                News
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-bicycle mr-2"></i>
                Sports
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-boombox mr-2"></i>
                Music
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-film mr-2"></i>
                Film
              </a>
            </li>
            <li>
              <a class="text-white" href="logout.php">
              <i class="bi bi-box-arrow-left"></i>
                Log out
              </a>
            </li>
          </div>
        </div>
        <section class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
    </body>
</html>