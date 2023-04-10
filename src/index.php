<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


<body class="" >
<nav class="navbar navbar-expand-lg bg-body-tertiary"
     style="padding-right: 70px; padding-left: 70px">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div>
                <button type="button" class="btn btn-outline-primary"
                style="margin-right: 20px"
                onclick="window.location.href='./sign_in'">
                    Sign In
                </button>

                <button type="button" class="btn btn-primary"
                onclick="window.location.href='./sign_up'">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</nav>

<section id="welcome_section" class="container"
         style="background-image: url('./resource/image.jpg'); height: 653px; width: 1280px;
         display: flex; justify-content: center; align-items: center; border-radius: 1rem;
         margin-top: 30px; flex-direction: column">

    <section id="button_section" class="container"
             style="display: flex; gap: 1.5rem; padding-bottom: 20px;
             background-color: rgba(240,248,255,0.61); backdrop-filter: blur(0.2rem); border-radius: 1rem;
padding-top: 20px">
            <div>
                MUKTO BIHONGO
                HENTEN
            </div>
    </section>

    <section id="button_section" class="container"
             style="display: flex; gap: 1.5rem; ;  margin-top: 12rem;">

        <div style="background-color: rgba(240,248,255,0.61); backdrop-filter: blur(0.2rem);
                    padding: 20px; border-radius: 1rem;  ">
            <button class="btn btn-primary" style="padding: 2rem; border-radius: 1rem">Volunteer</button>
            <button class="btn btn-primary" style="padding: 2rem; border-radius: 1rem">Worker</button>
            <button class="btn btn-primary" style="padding: 2rem; border-radius: 1rem">Admin/ IT Department</button>
            <button class="btn btn-primary" style="padding: 2rem; border-radius: 1rem">Selling Wastage</button>
            <button class="btn btn-primary" style="padding: 2rem; border-radius: 1rem">Donation</button>
        </div>

    </section>

</section>




</body>
</html>