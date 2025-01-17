<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collections_database";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products based on search/filter
$whereClause = "1"; // Default to no filter
if (isset($_GET['search'])) {
    $searchTerm = $conn->real_escape_string($_GET['search']);
    $whereClause = "product_name LIKE '%$searchTerm%'";
}

if (isset($_GET['category']) && $_GET['category'] !== '') {
    $category = $conn->real_escape_string($_GET['category']);
    $whereClause .= " AND category = '$category'";
}

if (isset($_GET['price']) && $_GET['price'] !== '') {
    if ($_GET['price'] == 'low') {
        $whereClause .= " AND price < 50";
    } elseif ($_GET['price'] == 'medium') {
        $whereClause .= " AND price BETWEEN 50 AND 100";
    } elseif ($_GET['price'] == 'high') {
        $whereClause .= " AND price > 100";
    }
}

$sql = "SELECT * FROM products WHERE $whereClause";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container py-5">
        <h1 class="text-center mb-4">Collections</h1>

        <!-- Search and Filter Bar -->
        <form class="row g-3 mb-4" method="GET" action="">
            <div class="col-md-6">
                <input type="text" class="form-control" name="search" placeholder="Search products..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
            </div>
            <div class="col-md-3">
                <select class="form-select" name="category">
                    <option value="">All Categories</option>
                    <option value="Apparel" <?= isset($_GET['category']) && $_GET['category'] == 'Apparel' ? 'selected' : '' ?>>Apparel</option>
                    <option value="Outerwear" <?= isset($_GET['category']) && $_GET['category'] == 'Outerwear' ? 'selected' : '' ?>>Outerwear</option>
                    <option value="Footwear" <?= isset($_GET['category']) && $_GET['category'] == 'Footwear' ? 'selected' : '' ?>>Footwear</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" name="price">
                    <option value="">All Prices</option>
                    <option value="low" <?= isset($_GET['price']) && $_GET['price'] == 'low' ? 'selected' : '' ?>>Below $50</option>
                    <option value="medium" <?= isset($_GET['price']) && $_GET['price'] == 'medium' ? 'selected' : '' ?>>$50-$100</option>
                    <option value="high" <?= isset($_GET['price']) && $_GET['price'] == 'high' ? 'selected' : '' ?>>Above $100</option>
                </select>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
            </div>
        </form>

        <!-- Products Display -->
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="<?= htmlspecialchars($row['image_url']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['product_name']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($row['product_name']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
                                <p class="text-primary">$<?= number_format($row['price'], 2) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">No products found.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
