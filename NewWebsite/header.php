<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <style>
      #main {
        background-image: url("images/pexels-thisisengineering-3862632.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="font-family: 'Jost', sans-serif">
    <header class="head">
      <div class="container">
        <div class="row text-light" style="height: 70px">
          <div class="col-12 m-auto">
            <div class="row mt-1">
              <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" style="display: flex;align-items: center;">
                    
                  <div class="container-fluid">
                    <a
                      class="navbar-brand text-light"
                      style="font-size: 25px; font-weight: 600"
                      href="#"
                      >Co-working</a
                    >
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarNavAltMarkup"
                      aria-controls="navbarNavAltMarkup"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="collapse navbar-collapse"
                      id="navbarNavAltMarkup"
                    >
                    <div style="display: flex; width: 100%; justify-content: space-around;">
                      <div class="navbar-nav">
                        <a
                          class="nav-link active mx-4 text-light"
                          aria-current="page"
                          href="#"
                          >Home</a
                        >
                        <a
                          class="nav-link active mx-3 text-light"
                          aria-current="page"
                          href="#"
                          >Benefits</a
                        >
                        <a
                          class="nav-link active mx-3 text-light"
                          aria-current="page"
                          href="#"
                          >About</a
                        >
                        <a
                          class="nav-link active mx-3 text-light"
                          aria-current="page"
                          href="#"
                          >Blog</a
                        >
                        <a
                          class="nav-link active mx-3 text-light"
                          aria-current="page"
                          href="posts.php"
                          >Posts</a
                        >

                        
                      </div>
                      <div class="mt-1">
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-instagram mx-3"></i>
                        <i class="fa fa-twitter"></i>
                      </div>
                      <?php
                      if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']  == true  )  {?>
                        <div class="mt-1">
                          <a href="logout.php" class="btn text-light">Logout</a>
                        </div>
                        <?php
                      }
                        ?>
                    </div>
                      

                    </div>
                  </div>
                </nav>
              </div>

             
            </div>
          </div>
        </div>
      </div>
    </header>