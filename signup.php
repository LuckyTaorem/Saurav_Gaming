<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Saurav Gaming</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url('assets/images/saurav_gaming_wall.png');background-repeat:no-repeat;background-size: 100% 100%;">
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary" style="background-color: rgba(147,112,219,0.5);">
            <?php if(isset($_REQUEST['q'])){ ?>
                <?php if($_REQUEST['q'] == "pass_err"){?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        Password and Confirm password does not match!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php }?>
                <?php if($_REQUEST['q'] == "email_err"){?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        Email is already Registered!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php }?>
            <?php }?>
            <h2 class="text-center mb-4 text-white">Join us Now!</h2>
            <form class="form" action="logic.php" method="POST">
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Username</label>
                    <input type="text" name="username" class="form-control border border-primary" id="" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                    <input type="email" name="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp"required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                    <input type="password" name="pass" class="form-control border border-primary" id="exampleInputPassword1"required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Confirm Password</label>
                    <input type="password" name="cpass" class="form-control border border-primary" id="exampleInputPassword1"required>
                </div>
                <!-- <p class="small"><a class="text-white" href="forget-password.html">Forgot password?</a></p> -->
                <div class="d-grid">
                    <button class="btn btn-primary" name="create" type="submit">Create</button>
                </div>
            </form>
            <div class="mt-3">
                <p class="mb-0  text-center text-white">Already have an account? <a href="login.php"
                        class="text-danger fw-bold">Login here</a></p>
            </div>
        </div>
    </div>
</body>

</html>