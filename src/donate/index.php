<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate</title>
</head>

<link href="../stylesheet/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary"
     style="padding: 10px 70px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../resource/Component%201.svg" height="52px" alt=""></a>
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

<h2 style="text-align: center; margin-top: 3rem">Donation</h2>

<form class="container" style="display: flex; gap: 3rem; margin-top: 3rem; justify-content: space-around">
    <div style="display: flex; flex-direction: column">
        <div style="display:flex; gap: 20px">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold" style="font-size: 1.2rem">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="John Doe" style="height: 48px">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold" style="font-size: 1.2rem">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com" style="height: 48px">
            </div>
        </div>

        <div class="mb-3">
            <label for="contact_number" class="form-label fw-bold" style="font-size: 1.2rem">Contact Number</label>
            <input type="email" class="form-control" id="contact_number" placeholder="+880 1XXX-XXXXXX"
            style="height: 48px">
        </div>

        <div class="mb-3">
            <label for="nid_number" class="form-label fw-bold" style="font-size: 1.2rem">NID Number
            </label>
            <input type="email" class="form-control" id="nid_number" placeholder="XXXXX-XXXXX" style="height: 48px">
        </div>
        <hr>
        <h4>Additional Information</h4>
        <label for="additional_information"></label>
        <textarea class="form-control" id="additional_information" rows="3"></textarea>
    </div>

    <div style="display: flex; flex-direction: column">

        <div class="mb-3" style="width: 25rem">
            <label for="name" class="form-label fw-bold" style="font-size: 1.2rem">Donate amount</label>
            <input type="text" class="form-control" id="name" placeholder="Enter the amount" style="height: 48px">
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Mobile Banking
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Debit/Credit Card
                </label>
            </div>

            <button class="btn btn-success" style="height: 48px; width: 25rem; margin-top: 20px">
                Donate
            </button>
        </div>
    </div>
</form>
</body>
</html>

