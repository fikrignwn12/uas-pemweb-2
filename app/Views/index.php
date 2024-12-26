<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Televisi Borussia Munchen - Premium Televisi Store</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      .navbar-custom {
        background: linear-gradient(135deg,rgb(0, 4, 214), #4f46e5);
      }
      .hero-section {
        background: linear-gradient(135deg,rgb(0, 108, 250), #e5e7eb);
        border-radius: 15px;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
      }
      .card {
        transition: transform 0.3s ease-in-out;
        border: none;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
      }
      .card:hover {
        transform: translateY(-5px);
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
      .price-tag {
        color: #4f46e5;
        font-weight: bold;
        font-size: 1.2rem;
      }
      .footer {
        background: linear-gradient(135deg,rgb(208, 40, 40),rgb(237, 32, 32));
        color: white;
      }
      .search-form {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
      }
      .cart-btn {
        transition: all 0.3s ease;
      }
      .cart-btn:hover {
        transform: scale(1.05);
      }
    </style>
  </head>
  <body>
    <!-- Updated Navbar with Logout -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="fas fa-mobile-alt me-2"></i>
          Toko Televisi Borussia Munchen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-home me-1"></i> Home</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-sign-in-alt me-1"></i> Login
              </button>
            </li>
            <!-- Added Logout Button -->
            <li class="nav-item ms-2">
              <a href="<?= base_url() ?>auth/logout" class="btn btn-danger">
                <i class="fas fa-sign-out-alt me-1"></i> Logout
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>chart" class="nav-link cart-btn">
                <i class="fas fa-shopping-cart me-1"></i>
                Cart <span class="badge bg-warning">4</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required />
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Hero Section -->
      <div class="row hero-section mb-5">
        <div class="col-md-6 p-5">
          <h1 class="display-4 fw-bold mb-3">Welcome to Borussia Munchen Television Store</h1>
          <p class="lead mb-4">menyediakan berbagai pilihan televisi dengan kualitas yang terbaik dan tercanggih sejagad raya</p>
          <a href="#products" class="btn btn-primary btn-lg">
            <i class="fas fa-shopping-bag me-2"></i>cari produk
          </a>
        </div>
        <div class="col-md-6 p-5">
          <div class="search-form">
            <h2 class="h4 mb-4"><i class="fas fa-search me-2"></i>temukan televisi yang anda cari</h2>
            <form action="">
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                  <input type="text" class="form-control" placeholder="Search by brand..." />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-tag"></i></span>
                  <input type="text" class="form-control" placeholder="Search by model..." />
                </div>
              </div>
              <button class="btn btn-primary w-100">
                <i class="fas fa-search me-2"></i>Search
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Products Section -->
      <h2 class="h3 mb-4" id="products">
        <i class="fas fa-fire me-2"></i>pilihan produk
      </h2>
      <div class="row g-4 mb-5">
        <!-- Product Cards -->
        <div class="col-md-3">
          <div class="card h-100">
            <div class="position-absolute top-0 end-0 p-2">
              <span class="badge bg-danger">New</span>
            </div>
            <img src="images/tv lg.jpg" class="card-img-top" alt="lg" />
            <div class="card-body">
              <h5 class="card-title">LG TV AI ThinQ</h5>
              <p class="price-tag mb-3">Rp 17.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-primary">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-primary">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/tv samsungql.jpg" class="card-img-top" alt="samsung" />
            <div class="card-body">
              <h5 class="card-title">SAMSUNG Neo QLED</h5>
              <p class="price-tag mb-3">Rp 18.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-primary">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-primary">
                  <i ```html
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <div class="position-absolute top-0 end-0 p-2">
              <span class="badge bg-success">Sale</span>
            </div>
            <img src="images/tv sharp.jpg" class="card-img-top" alt="sharp" />
            <div class="card-body">
              <h5 class="card-title">SHARP 4K TV</h5>
              <p class="price-tag mb-3">Rp 7.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-primary">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-primary">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/tv polytron4k.jpg" class="card-img-top" alt="sony" />
            <div class="card-body">
              <h5 class="card-title">POLYTRON SMART TV 4K</h5>
              <p class="price-tag mb-3">Rp 13.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-primary">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-primary">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5><i class="fas fa-mobile-alt me-2"></i>Toko Televisi Borussia Munchen</h5>
            <p>toko televisi terbaik dan tercanggih by Harbert Hainer Gunawan</p>
          </div>
          <div class="col-md-4">
            <h5><i class="fas fa-map-marker-alt me-2"></i>Location</h5>
            <p> Munchen Selatan  <br>Jambi, Indonesia</p>
          </div>
          <div class="col-md-4">
            <h5><i class="fas fa-envelope me-2"></i>Contact</h5>
            <p>Email: info@ahmadfikrigunawan.com<br>Phone: (+62) 0808-0808-0808</p>
          </div>
        </div>
        <hr class="text-light">
        <div class="text-center">
          <p class="mb-0">© 2024 Toko Televisi Borussia Munchen. All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>