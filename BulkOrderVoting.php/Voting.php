<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Order Voting</title>
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
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Collections</h5><img src="Images/8672974_ic_fluent_collections_filled_icon.png" alt="collections" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Group Interaction</h5><img src="Images/team.png" alt="Group interaction" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Bulk Order Voting</h5><img src="Images/voting-box.png" alt="Bulk order voting" height="50px"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Contact</h5><img src="Images/phone.png" alt="Contact" height="50px"></a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-white"><h5>Log in</h5><img src="Images/enter.png" alt="Log in" height="50px"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Group Interaction Section -->
    <section class="group-interaction py-5 bg-light">
        <div class="container text-center">
            <h2>Group Interaction</h2>
            <p>Join the community to create or join groups and collaborate on designs.</p>
            <a href="CreateGroup.php" class="btn btn-primary">Create Group</a>
            <a href="Voting.php" class="btn btn-outline-primary">Join Group</a>
        </div>
    </section>

    <!-- Design Gallery Section -->
    <section class="design-gallery py-5">
        <div class="container">
            <h3 class="text-center mb-4">Vote for Bulk Orders</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Example Card -->
                <div class="col">
                    <div class="card">
                        <img src="design1.jpg" class="card-img-top" alt="Design 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Design 1</h5>
                            <p class="card-text">Elegant and customizable for any event.</p>
                            <p class="rating">Rating: 4.5/5 (120 votes)</p>
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-success">Like</button>
                                <button class="btn btn-danger">Dislike</button>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-outline-primary">Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more design cards here -->
                <div class="col">
                    <div class="card">
                        <img src="design1.jpg" class="card-img-top" alt="Design 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Design 1</h5>
                            <p class="card-text">Elegant and customizable for any event.</p>
                            <p class="rating">Rating: 4.5/5 (120 votes)</p>
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-success">Like</button>
                                <button class="btn btn-danger">Dislike</button>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-outline-primary">Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="design1.jpg" class="card-img-top" alt="Design 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Design 1</h5>
                            <p class="card-text">Elegant and customizable for any event.</p>
                            <p class="rating">Rating: 4.5/5 (120 votes)</p>
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-success">Like</button>
                                <button class="btn btn-danger">Dislike</button>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary comment-btn">Comment</button>
                                <div class="comment-box mt-2 d-none">
                                    <textarea class="form-control" rows="2" placeholder="Add a comment..."></textarea>
                                    <button class="btn btn-primary mt-2">Submit</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Details Form -->
    <section class="order-details py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-4">Order Details</h3>
            <form>
                <div class="mb-3">
                    <label for="orderName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="orderName" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="orderEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="orderEmail" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="orderQuantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="orderQuantity" placeholder="Enter quantity">
                </div>
                <div class="mb-3">
                    <label for="designSelection" class="form-label">Select Design</label>
                    <select class="form-select" id="designSelection">
                        <option value="design1">Design 1</option>
                        <option value="design2">Design 2</option>
                        <option value="design3">Design 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Confirm Order</button>
            </form>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container text-center">
            <h3>What Our Customers Say</h3>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="lead">"The group interaction and voting made it so easy to finalize our cricket team’s t-shirts!"</p>
                        <p>- Kavindu Perera</p>
                    </div>
                    <div class="carousel-item">
                        <p class="lead">"Customization options are endless! Loved the experience."</p>
                        <p>- Shalini Fernando</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 StyleVogue. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
