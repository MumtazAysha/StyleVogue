<?php
require_once 'dbconf.php';
?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $groupName = $_POST['groupName'];
    $groupDescription = $_POST['groupDescription'];
    $category = $_POST['category'];

    $sql = "INSERT INTO groups (group_name, description, category) VALUES ('$groupName', '$groupDescription', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Group created successfully!'); window.location.href='create_group.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">StyleVogue</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Create Group</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

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