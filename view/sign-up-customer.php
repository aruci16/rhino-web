<html>

<head>
    <title>iQueue - Sign Up</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/sign-up.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text/css">
        body {
            background: #6d7fcc;

        }

        .error {
            color: #bf1800;
            margin-top: 10px;
            text-align: left;
            margin-bottom: 0px;
            font-size:15px;
        }
    </style>
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <div class="container" id="wrap">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                    <h1>iQueue Sign Up</h1>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname"
                                   value="<?php if (isset($_POST["firstname"])) echo $_POST["firstname"] ?>"
                                   class="form-control input-lg"
                                   placeholder="First Name"/>
                            <?php
                            if (!empty($validationController->getNameError())) {
                                ?>
                                <p class="error"><?php echo $validationController->getNameError(); ?></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="lastname"
                                   value="<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>"
                                   class="form-control input-lg"
                                   placeholder="Last Name"/>
                            <?php
                            if (!empty($validationController->getSurnameError())) {
                                ?>
                                <p class="error"><?php echo $validationController->getSurnameError(); ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <input type="text" name="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"] ?>"
                           class="form-control input-lg"
                           placeholder="Your Email"/>
                    <?php
                    if (!empty($validationController->getEmailError())) {
                        ?>
                        <p class="error"><?php echo $validationController->getEmailError(); ?></p>
                        <?php
                    }
                    ?>
                    <br>
                    <input type="text" name="username"
                           value="<?php if (isset($_POST["username"])) echo $_POST["username"] ?>"
                           class="form-control input-lg"
                           placeholder="Username"/>
                    <?php
                    if (!empty($validationController->getUsernameError())) {
                        ?>
                        <p class="error"><?php echo $validationController->getUsernameError(); ?></p>
                        <?php
                    }
                    ?>
                    <br>
                    <input type="password" name="password" value="" class="form-control input-lg"
                           placeholder="Password"/>
                    <?php
                    if (!empty($validationController->getPasswordError())) {
                        ?>
                        <p class="error"><?php echo $validationController->getPasswordError(); ?></p>
                        <?php
                    }
                    ?>
                    <br>
                    <input type="password" name="confirm_password" value="" class="form-control input-lg"
                           placeholder="Confirm Password"/>

                    <?php
                    if (isset($messageError)) {
                        ?>
                        <p class="error"><?php echo $messageError; ?></p>
                        <?php
                    }
                    ?>
                    <br>
                    <input type="text" name="phone" value="<?php if (isset($_POST["phone"])) echo $_POST["phone"] ?>"
                           class="form-control input-lg"
                           placeholder="Phone Number"/>
                    <?php
                    if (!empty($validationController->getPhoneError())) {
                        ?>
                        <p class="error"><?php echo $validationController->getPhoneError(); ?></p>
                        <?php
                    }
                    ?>

                    <br>

                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="signUp">
                        Create my account
                    </button>

                    <br>
                    <button class="btn btn-danger btn-lg " type="submit" name="goBack">
                        Go Back
                    </button>
                </form>
            </div>
        </div>
</form>
</div>


</body>
</html>
