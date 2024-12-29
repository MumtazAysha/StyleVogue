<?php
require_once 'dbconf.php';
?>
<?php
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $groupName = $_POST['groupName'];
    $groupDescription = $_POST['groupDescription'];
    $category = $_POST['category'];

    $sql = "INSERT INTO groups (group_name, description, category) VALUES ('$groupName', '$groupDescription', '$category')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Group created successfully!'); window.location.href='create_group.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $connection->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header class="text-white p-3" style="background-color: rgb(23, 167, 224);">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="logo">StyleVogue</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Home</h5><img src="Images/326656_home_icon.png" alt="Home" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>About</h5><img src="Images/info-button.png" alt="About" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Create Group</h5><img src="Images/voting-box.png" alt="Create Group" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Contact</h5><img src="Images/phone.png" alt="Contact" height="50px"></a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <!-- Create Group Section -->
    <section class="create-group py-5">
        <div class="container">
            <h3 class="text-center mb-4">Create a Group</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="groupName" class="form-label">Group Name</label>
                    <input type="text" class="form-control" id="groupName" name="groupName" placeholder="Enter group name" required>
                </div>
                <div class="mb-3">
                    <label for="groupDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="groupDescription" name="groupDescription" rows="3" placeholder="Enter group description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category">
                        <option value="Fashion">Fashion</option>
                        <option value="Design">Design</option>
                        <option value="Custom Orders">Custom Orders</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Group</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 StyleVogue. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>