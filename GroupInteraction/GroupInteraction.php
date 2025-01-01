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

    $sql = "INSERT INTO group_interactions (group_name, description, category) VALUES ('$groupName', '$groupDescription', '$category')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Group interaction created successfully!'); window.location.href='group_interaction.html';</script>";
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
    <title>Group Interaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="group-interaction py-5">
        <div class="container">
            <h3 class="text-center mb-4">Group Interaction</h3>
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
                <button type="submit" class="btn btn-primary">Create Interaction</button>
            </form>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2024 StyleVogue. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
