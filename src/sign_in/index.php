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


<body class="" style="">


<section class="vh-100" style="background-color: #C6E2E9;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://images.unsplash.com/photo-1617953141905-b27fb1f17d88?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post" action="process.php">

                                    <h3 class="mb-3 pb-3 fw-bold" style="letter-spacing: 1px;">Sign into your account</h3>

                                    <div style="display: flex; flex-direction: column; ">
                                        <div>
                                            <input type="email" id="email"
                                                   class="form-control form-control-lg"
                                                   placeholder="Email Address"/>
                                            <label class="form-label" for="email"></label>
                                        </div>

                                        <div>
                                            <input type="password" id="password"
                                                   class="form-control form-control-lg"
                                                   placeholder="Password"/>
                                            <label class="form-label" for="password"></label>
                                        </div>

                                        <div style=" display: flex; flex-direction: column; gap: 30px">
                                            <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>

                                        </div>
                                    </div>
                                </form>


                                <div style="margin-top: 40px">
                                    <a href="#" style=" margin-top: 10px">Forgot password?</a>
                                    <p class="" style="color: #393f81;">Don't have an account?
                                        <a href="../sign_up" style="color: #393f81;">Register here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>