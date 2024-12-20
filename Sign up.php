<?php
    require_once 'dbconf.php';
?>
<?php
    if(isset($_POST["Signup"])){
        if($_POST["Password"] == $_POST["cPassword"]){
            $name = mysqli_real_escape_string($connection,$_POST["name"]);
            $email = mysqli_real_escape_string($connection,$_POST["email"]);

            $sql = "INSERT INTO users (name,Email_address,Password) VALUES('{$name}','{$email}','{$_POST["Password"]}')";
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
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

       
        body {
            background-image: url('Images/istockphoto-1352409276-612x612.jpg'); 
            background-size: cover;
           
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }

        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
        }

       
        .login-container {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.4); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            color: #000;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #000;
        }

        .form-control {
            border-radius: 5px;
            opacity:0.3;
        }

      
        .btn {
            background-color: rgba(255, 255, 255, 0.7); 
            color: #333;
            border: 1px solid rgba(255, 255, 255, 0.5);
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 1); 
            color: #007bff;
        }

       
        .text-muted a {
            color: #007bff;
            text-decoration: none;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   
    <div class="overlay"></div>

   
    <div class="login-container">
        <h2>Sign Up</h2>
        
        <form action="Sign up.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="name" class="form-control"  name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email Address</b></label>
                <input type="email" class="form-control"  name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" name="Password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label"><b>Confirm password</b></label>
                <input type="confirm password" class="form-control"  name="cPassword" placeholder="Confirm password" required>
            </div>
            <button type="submit" name="Signup" class="btn w-100"><b>Sign up</b></button>
        </form>
        <p class="text-center text-muted mt-3">
            Already have an account? <a href="login.php" style="color: #007bff; text-decoration: none;">Login here</a>
        </p>
    </div>
    
    
</body>
</html>