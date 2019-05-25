<html>
<head>
    <title>Software Development Competition - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        form {
            width: 70%;
            margin: auto;
        }

        h1, h6 {
            width: 600px;
            margin-top: 5px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>

<h1>AS - Software Development Competition</h1>
<h6>Username: NameSurname (ex: AleksRuci)</h6>
<h6>Password: NameSurname</h6>
<form action="login" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Username"
                                       required autofocus value="<?php
                                if (isset($_POST["username"]))
                                    echo $_POST["username"];
                                ?>" name="username" placeholder="Enter Username">
                                <label for="inputEmail">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control"
                                       placeholder="Password"
                                       required name="pswd">
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <p style="color: red">
                                    <?php
                                    if (isset($messageError)) {
                                        echo $messageError;
                                    }
                                    ?>
                                </p>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"
                                    name="login">Sign in
                            </button>
                            <hr class="my-4">
                        </form>
                        <form action="signup" method="post"
                              enctype="multipart/form-data">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" name="signUp"><i
                                        class="fab fa-google mr-2"></i> Sign Up
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>

