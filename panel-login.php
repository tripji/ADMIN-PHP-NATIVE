<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<?php include 'component/head.php'; ?>
    <link rel="stylesheet" href="bootstrap/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="bootstrap/assets/css/style.css">
</head>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="proses/login.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="username" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'component/ending.php'; ?>

</body>
</html>