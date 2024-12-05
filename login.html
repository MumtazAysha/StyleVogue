<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

       
        body {
            background-image: url('istockphoto-1352409276-612x612.jpg');
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
        <h2>Login</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

           
            $servername = "localhost";
            $username = "root";
            $dbpassword = "";
            $dbname = "users_db";

            
            $conn = new mysqli($servername, $username, $dbpassword, $dbname);

            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

          
            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<div class='alert alert-success'>Login successful! Redirecting...</div>";
                header("refresh:2;url=home.php");
            } else {
                echo "<div class='alert alert-danger'>Invalid email or password!</div>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <form action="home.html" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn w-100">Login</button>
        </form>
        <p class="text-center text-muted mt-3">
            Don't have an account? <a href="Sign up.html" style="color: #007bff; text-decoration: none;">Sign up here</a>
        </p>
    </div>

   
</body>
</html>