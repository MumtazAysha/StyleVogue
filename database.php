<?php
    require_once 'connection/connection.php';
?>
<?php
    if(isset($_POST["sign up"])){
        if($_POST["Password"] == $_POST["cPassword"]){
            $fullname = mysqli_real_escape_string($connection,$_POST["Name"]);
            $mail = mysqli_real_escape_string($connection,$_POST["Email address"]);

            $sql = "INSERT INTO users (Name,Email address,Password) VALUES('{$Name}','{$Email address}','{$_POST["Password"]}')";
            $result_set = mysqli_query($connection,$sql);

            if(isset($result_set)){
                header("Location: login.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Custom CSS -->
     <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="signup-form text-center p-5 shadow rounded">
        <img src="user.png" alt="">
        <h2 class="mb-4">Sign Up</h2>
        <form method="post" action="signup.php">
            <div class="form-group" style="margin-bottom: 10px">
                <label for="name" ><b>Name</b></label>
                <input type="text" name="Name" class="form-control" style="margin-bottom: 25px;border-color:#06b30e;"id="name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="email" ><b>Email address</b></label>
                <input type="email" name="Email address" class="form-control" style="margin-bottom: 25px;border-color:#06b30e;" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" name="Password" class="form-control" style="margin-bottom: 25px;border-color:#06b30e;" id="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="confirm-password" ><b>Confirm Password</b></label>
                <input type="password" name="Confirm password" class="form-control" style="margin-bottom: 25px;border-color:#06b30e;" id="confirm-password" placeholder="Confirm password">
            </div>
            <button type="submit" name="signup" class="btn btn-block" style="background-color: #06b30e; color:white;" style="margin-bottom: 10px">Sign Up</button>
        </form>
        <div class="mt-3">
            Already have an account? <a href="login.php" style="text-decoration: none;color:#06b30e ;">Log in</a>
        </div>

    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>