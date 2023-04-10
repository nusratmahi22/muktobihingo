<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Sign Up</title>
</head>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
/>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
></script>

<body>
<section class="vh-100" style="background-color: #c6e2e9">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem">
                    <div class="row">
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="post" action="./process.php">
                                    <h3 class="mb-2 pb-2 fw-bold">Register Here</h3>

                                    <div style="display: flex; flex-direction: column">
                                        <div style="display: flex; gap: 1rem">
                                            <div>
                                                <input
                                                    type="text"
                                                    id="first_name"
                                                    class="form-control form-control-lg"
                                                    placeholder="First Name"
                                                    name="first_name"
                                                />
                                                <label class="form-label" for="first_name"></label>
                                            </div>
                                            <div>
                                                <input
                                                    type="text"
                                                    id="last_name"
                                                    class="form-control form-control-lg"
                                                    placeholder="Last Name"
                                                    name="last_name"
                                                />
                                                <label class="form-label" for="last_name"></label>
                                            </div>
                                        </div>

                                        <div style="margin-top: -10px">
                                            <input
                                                type="email"
                                                id="email"
                                                class="form-control form-control-lg"
                                                placeholder="Email Address"
                                                name="email"
                                            />
                                            <label class="form-label" for="email"></label>
                                        </div>

                                        <div style="margin-top: -10px">
                                            <div
                                                class="btn-group w-100"
                                                role="group"
                                                aria-label="Basic radio toggle button group"
                                            >
                                                <input
                                                    type="radio"
                                                    class="btn-check"
                                                    name="gender"
                                                    value ="male"
                                                    id="male"
                                                    autocomplete="off"
                                                    checked
                                                />
                                                <label class="btn btn-outline-dark" for="male"
                                                >Male</label
                                                >

                                                <input
                                                    type="radio"
                                                    class="btn-check"
                                                    name="gender"
                                                    value ="female"
                                                    id="Female"
                                                    autocomplete="off"
                                                />
                                                <label class="btn btn-outline-dark" for="Female"
                                                >Female</label
                                                >

                                                <input
                                                    type="radio"
                                                    class="btn-check"
                                                    name="gender"
                                                    value="others"
                                                    id="Others"
                                                    autocomplete="off"
                                                />
                                                <label class="btn btn-outline-dark" for="Others"
                                                >Others</label
                                                >
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px">
                                            <label
                                                class="form-label small"
                                                for="dob"
                                                style="color: gray; margin-left: 5px"
                                            >Date of Birth</label
                                            >
                                            <input
                                                type="date"
                                                id="dob"
                                                class="form-control form-control-lg"
                                                name="dob"
                                            />
                                        </div>

                                        <div style="margin-top: 1rem">
                                            <div
                                                class="btn-group w-100"
                                                role="group"
                                                aria-label="Basic radio toggle button group"
                                            >
                                                <input
                                                    type="radio"
                                                    class="btn-check"
                                                    id="worker"
                                                    autocomplete="off"
                                                    checked
                                                    name="role"
                                                    value="worker"
                                                />
                                                <label class="btn btn-outline-dark" for="worker"
                                                >Worker</label
                                                >

                                                <input
                                                    type="radio"
                                                    class="btn-check"
                                                    name="role"
                                                    id="volunteer"
                                                    autocomplete="off"
                                                    value="volunteer"
                                                />
                                                <label class="btn btn-outline-dark" for="volunteer"
                                                >Volunteer</label
                                                >
                                            </div>
                                        </div>

                                        <div style="display: flex; margin-top: 1rem; gap: 1rem">
                                            <div>
                                                <input
                                                    type="password"
                                                    id="password"
                                                    class="form-control form-control-lg"
                                                    placeholder="Password"
                                                    name="password"
                                                />
                                                <label class="form-label" for="password"></label>
                                            </div>

                                            <div>
                                                <input
                                                    type="password"
                                                    id="confirm_password"
                                                    class="form-control form-control-lg"
                                                    placeholder="Confirm Password"
                                                    name="confirm_password"
                                                />
                                                <label
                                                    class="form-label"
                                                    for="confirm_password"
                                                ></label>
                                            </div>
                                        </div>

                                        <button
                                            class="btn btn-dark btn-lg btn-block"
                                            type="submit"
                                            style="margin-top: -10px"
                                        >
                                            Sign Up
                                        </button>
                                    </div>
                                </form>

                                <div style="margin-top: 20px">
                                    <p class="" style="color: #393f81">
                                        Already have an account?
                                        <a href="../sign_in" style="color: #393f81"
                                        >Sign In</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img
                                src="https://images.unsplash.com/photo-1506368249639-73a05d6f6488?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"
                                alt="login form"
                                class="img-fluid"
                                style="border-radius: 0 1rem 1rem 0"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>