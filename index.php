<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleVogue - Customized Fashion Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php require_once 'header.php'; ?>

<!-- 
    <header class="text-white p-3" style="background-color: rgb(23, 167, 224);">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="logo">StyleVogue</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="index.php" class="nav-link text-white"><h5>Home</h5><img src="Images/326656_home_icon.png" alt="Home" height="50px"></a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white"><h5>About</h5><img src="Images/info-button.png" alt="About" height="50px"></a></li>
                <li class="nav-item"><a href="collections.php" class="nav-link text-white"><h5>Collections</h5><img src="Images/8672974_ic_fluent_collections_filled_icon.png" alt="collections" height="50px"></a></li>
                <li class="nav-item"><a href="GroupInteraction.php" class="nav-link text-white"><h5>Group Interaction</h5><img src="Images/team.png" alt="Group interaction" height="50px"></a></li>
                <li class="nav-item"><a href="Voting.php" class="nav-link text-white"><h5>Bulk Order Voting</h5><img src="Images/voting-box.png" alt="Bulk order voting" height="50px"></a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white"><h5>Contact</h5><img src="Images/phone.png" alt="Contact" height="50px"></a></li>
                <li class="nav-item"><a href="login.php" class="nav-link text-white"><h5>Log in</h5><img src="Images/enter.png" alt="Log in" height="50px"></a></li>
            </ul>
        </nav>
    </div>
</header>
-->


<section class="slider-section py-5">
    <div class="container text-center">
        <h1><i>Become the new style, become the new you</i></h1>
        <h3 class="slogan">Top Designs</h3>

        
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/istockphoto-1097047438-612x612.jpg" class="d-block w-100" alt="Evening wear" height="500px">
                <div class="carousel-caption d-none d-md-block">
                  <h4>Evening Wear</h4>
                  <p>Unleash your elegance with our premium evening wear collection</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/Office Wear Banner_1 (1).jpg" class="d-block w-100" alt="Office Wear" height="500px">
                <div class="carousel-caption d-none d-md-block">
                  <h4>Office Wear</h4>
                  <p>Old money style at your fingertips</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/ef2a781eb14293bdb7e92f0501b536f152869404-512x258.webp" class="d-block w-100" alt="Modern Hanbok" height="500px">
                <div class="carousel-caption d-none d-md-block">
                  <h4>Modern Hanbok</h4>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

<!-- Exploring and customizing -->
<section class="middle-section text-center text-white">
    <div class="container">
        <div class="middle-overlay"></div>
        <h2>Your Fashion, Your Choice</h2>
        <p>Customize your designs and bring your vision to life.</p>
        <a href="#collections" class="btn btn-primary  btn-lg">Explore Collections</a>
        <a href="#customize" class="btn btn-secondary btn-lg">Start Customizing</a>
    </div>
</section>

<!-- Featured Collections -->
<section class="featured-collections py-5">
    <div class="container">
        <h3 class="text-center mb-4">Featured Collections</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="Images/IMG_0968.webp" class="card-img-top" alt="Spice girls" height="500px">
                    <div class="card-body">
                        <h5 class="card-title">Spice Girls Collection</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Images/174f2cd9bc225f18f0103ccce2511533.jpg" class="card-img-top" alt="Old Money Collection">
                    <div class="card-body">
                        <h5 class="card-title">Old Money Collection</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Images/Modest-Fashion-8-819x1024.jpg" class="card-img-top" alt="Modest Wear">
                    <div class="card-body">
                        <h5 class="card-title">Modest Girly</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Card section-->
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card text-bg-danger mb-3" style="max-width: 50rem;">
        <div class="card-body">
            <h5 class="card-title">We are proud to announce</h5>
          <h5 class="card-text">that StyleVogue is the Sri Lanka's First Customizable Fashion Design Website.</h5>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card text-bg-success mb-3" style="max-width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Moreover,</h5>
          <h5 class="card-text">the first ever online fashion site for bulk orders and bulk order voting.</h5>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card text-bg-secondary mb-3" style="max-width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Group intearctions</h5>
          <h5 class="card-text">enhancing the efficiency and satsifaction.</h5>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card text-bg-dark mb-3" style="max-width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">You can now vote</h5>
          <h5 class="card-text">for the designs we gave created for you and even comment your feedbacks and share those with our community.</h5>
        </div>
      </div>
    </div>
  </div>

<!-- Group Interaction -->
<section class="group-interaction py-5" style="background-color:skyblue;">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <h3>Join the Fashion Community</h3>
        <style>
            .community-box {
            background-color: #004488;
            color: rgb(42, 88, 254); 
            padding: 30px; 
            border-radius: 10px; 
            text-align: center;
            margin-top: 20px; 
        }

        .community-box h2 {
            font-size: 28px; 
            margin-bottom: 15px; 
        }

        .community-box p {
            font-size: 18px; 
        }

        .community-box .btn {
            margin-top: 20px; 
        }
        </style>
        <div class="container text-center">
        <p>Collaborate with your group to create stunning designs and share feedback.</p>
        <a href="#" class="btn btn-primary btn-lg">Join a Group</a>
        <a href="#" class="btn btn-secondary btn-lg">Start a New Group</a>
    </div>
</section>


<section class="bulk-order-voting py-5">
    <div class="container text-center">
        <h3>Vote for Bulk Orders</h3>
        <p>Create a design, share with your group, vote, and place the order!</p>
        <div class="row">
            <div class="col-md-4">
                <h5>Design 1</h5>
                <p>Votes: 120</p>
            </div>
            <div class="col-md-4">
                <h5>Design 2</h5>
                <p>Votes: 98</p>
            </div>
            <div class="col-md-4">
                <h5>Design 3</h5>
                <p>Votes: 85</p>
            </div>
        </div>
    </div>
</section>


<section class="testimonials bg-light py-5">
    <div class="container text-center">
        <h3>What Our Customers Say</h3>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/istockphoto-1217216447-612x612.webp" class="d-block w-100" alt="Testimonial 1" height="500px">
                    <h5>"Amazing quality and customization options!"</h5>
                    <p><strong>- Janithi Ranaweera</strong></p>
                </div>
                <div class="carousel-item">
                    <img src="Images/istockphoto-1075564146-612x612.webp" class="d-block w-100" alt="Testimonial 2" height="500px"> 
                    <h5>"Our team loved the bulk order voting system!"</h5>
                    <p><strong>LMC Holdings</strong></p>
                </div>
                <div class="carousel-item">
                    <img src="Images/istockphoto-1076612148-612x612.webp" class="d-block w-100" alt="Testimonial 2" height="500px"> 
                    <h5>"Highly recommended for custom fashion!"</h5>
                    <p><strong>- Michelle Fernando</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="newsletter-signup py-5">
    <div class="container text-center">
        <h3>Join Our Mailing List</h3>
        <p>Get updates and exclusive offers straight to your inbox.</p>
        <form class="d-flex justify-content-center">
            <input type="email" class="form-control w-50 me-2" placeholder="Enter your email">
            <button class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>


<?php require_once 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


