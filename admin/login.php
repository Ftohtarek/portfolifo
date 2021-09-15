<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>admin login</title>
</head>

<body>
    <div class="container mt-5">
        <?php include 'shardFile/resbonse.php'?>
        <a class="btn btn-outline-info float-right my-2"  href="../index.php">Go to Portofilo</a>
        <form action="back/systemController.php" method="POST">
            <div class="form-group">
                <input type="email" name='email' class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <input type="password" name='password' class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <button type="submit" name='login' class="btn btn-outline-primary w-100">
                    LogIn
                </button>
            </div>
        </form>

    </div>

</body>

</html>