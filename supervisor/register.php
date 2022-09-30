<!doctype html>
<html lang="en">

<head>
    <title>Sign Up - Indonesian Power</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(../assets/images/bg.jpeg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>
                            <form action="register_action.php" class="signin-form" method="POST">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Full Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input name="email" type="text" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Position</label>
                                    <!-- <input type="text" class="form-control" placeholder="Username" required> -->
                                    <select name="position" class="form-control" required>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Senior Operator">Senior Operator</option>
                                        <option value="Supervisor Operator">Supervisor Operator</option>
                                        <option value="Ahli Muda Operator">Ahli Muda Operator</option>
                                        <option value="Operator Senior Control Room">Operator Senior Control Room</option>
                                        <option value="Operator GT RSG">Operator GT RSG</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Team</label>
                                    <!-- <input type="text" class="form-control" placeholder="Username" required> -->
                                    <select name="team" class="form-control" required>
                                        <option value="Team A">Team A</option>
                                        <option value="Team B">Team B</option>
                                        <option value="Team C">Team C</option>
                                        <option value="Team D">Team D</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Confirm Password</label>
                                    <input name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                    <p class="form-control mt-3 text-center border-0">
                                        Have an account?&nbsp;
                                        <a href="index.php">Sign in!</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>