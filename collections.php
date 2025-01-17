<?php
require_once 'dbconf.php';


$whereClause = "1"; 
if (isset($_GET['search'])) {
    $searchTerm = $connection->real_escape_string($_GET['search']);
    $whereClause = "product_name LIKE '%$searchTerm%'";
}

if (isset($_GET['category']) && $_GET['category'] !== '') {
    $category = $connection->real_escape_string($_GET['category']);
    $whereClause .= " AND category = '$category'";
}

if (isset($_GET['price']) && $_GET['price'] !== '') {
    if ($_GET['price'] == 'low') {
        $whereClause .= " AND price < 1500.00";
    } elseif ($_GET['price'] == 'medium') {
        $whereClause .= " AND price BETWEEN 1500.00 AND 3500.00";
    } elseif ($_GET['price'] == 'high') {
        $whereClause .= " AND price > 3500.00";
    }
}

$sql = "SELECT * FROM products WHERE $whereClause";
$result = $connection->query($sql);
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
                    <option value="low" <?= isset($_GET['price']) && $_GET['price'] == 'low' ? 'selected' : '' ?>>Below Rs.1500.00</option>
                    <option value="medium" <?= isset($_GET['price']) && $_GET['price'] == 'medium' ? 'selected' : '' ?>>Rs.1500.00-Rs.3500.00</option>
                    <option value="high" <?= isset($_GET['price']) && $_GET['price'] == 'high' ? 'selected' : '' ?>>Above Rs.3500.00</option>
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
                                <p class="text-primary">Rs.<?= number_format($row['price'], 2) ?></p>
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

