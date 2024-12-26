<!DOCTYPE html>
<html lang="en">
  <!-- Head section remains exactly the same -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shopping Cart - Toko Televisi Borussia Munchen</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      /* All previous styles remain the same */
      .navbar-custom {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
      }
      .cart-item {
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
        border: 1px solid #eee;
      }
      .cart-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      }
      .cart-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 10px;
      }
      .product-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1f2937;
      }
      .quantity-badge {
        background: #4f46e5;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
      }
      .delete-btn {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 0;
        line-height: 40px;
        text-align: center;
        transition: all 0.3s ease;
      }
      .delete-btn:hover {
        transform: rotate(90deg);
      }
      .total-section {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: white;
        border-radius: 15px;
        padding: 2rem;
      }
      .btn-custom {
        border-radius: 25px;
        padding: 0.8rem 2rem;
        font-weight: 500;
        transition: all 0.3s ease;
      }
      .btn-custom:hover {
        transform: translateY(-2px);
      }
      .footer {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: white;
      }
      
      /* Add animation for removal */
      .cart-item.removing {
        animation: removeItem 0.5s ease forwards;
      }
      
      @keyframes removeItem {
        0% {
          opacity: 1;
          transform: translateX(0);
        }
        100% {
          opacity: 0;
          transform: translateX(-100%);
          height: 0;
          margin: 0;
          padding: 0;
        }
      }
    </style>
  </head>
  <body class="bg-light">
    <!-- All HTML content remains exactly the same until the cart items -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
      <!-- Navbar content remains the same -->
    </nav>

    <div class="container py-4">
      <!-- Header remains the same -->
      <div class="row mb-4">
        <div class="col-12">
          <h1 class="text-center mb-4">
            <i class="fas fa-shopping-cart me-2"></i>Your Shopping Cart
          </h1>
          <p class="text-center text-muted">Review your items and proceed to checkout</p>
        </div>
      </div>

      <!-- Cart Items -->
      <div class="row mb-4">
        <div class="col-lg-8 mb-4" id="cartItemsContainer">
          <!-- Cart Item 1 -->
          <div class="cart-item p-3 mb-3" data-price="5000000">
            <div class="row align-items-center">
              <div class="col-md-2 mb-2 mb-md-0">
                <img src="images/tv lg.jpg" alt="LG" class="cart-image" />
              </div>
              <div class="col-md-4 mb-2 mb-md-0">
                <h5 class="product-name mb-1">LG TV AI ThinQ</h5>
                <p class="text-muted mb-0">Premium Televisi</p>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="quantity-badge">
                  <i class="fas fa-times me-1"></i>1
                </span>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="fw-bold">Rp 17.000.000</span>
              </div>
              <div class="col-md-2 text-end">
                <button class="btn btn-danger delete-btn" onclick="removeCartItem(this)">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Cart Item 2 -->
          <div class="cart-item p-3 mb-3" data-price="5000000">
            <div class="row align-items-center">
              <div class="col-md-2 mb-2 mb-md-0">
                <img src="images/tv polytron4k.jpg" alt="Polytron" class="cart-image" />
              </div>
              <div class="col-md-4 mb-2 mb-md-0">
                <h5 class="product-name mb-1">Polytron Smart TV 4K</h5>
                <p class="text-muted mb-0">Premium Televisi</p>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="quantity-badge">
                  <i class="fas fa-times me-1"></i>1
                </span>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="fw-bold">Rp 13.000.000</span>
              </div>
              <div class="col-md-2 text-end">
                <button class="btn btn-danger delete-btn" onclick="removeCartItem(this)">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Cart Item 3 -->
          <div class="cart-item p-3 mb-3" data-price="5000000">
            <div class="row align-items-center">
              <div class="col-md-2 mb-2 mb-md-0">
                <img src="images/tv samsungql.jpg" alt="Samsung" class="cart-image" />
              </div>
              <div class="col-md-4 mb-2 mb-md-0">
                <h5 class="product-name mb-1">SAMSUNG Neo QLED</h5>
                <p class="text-muted mb-0">Premium Televisi</p>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="quantity-badge">
                  <i class="fas fa-times me-1"></i>1
                </span>
              </div>
              <div class="col-md-2 mb-2 mb-md-0 text-center">
                <span class="fw-bold">Rp 18.000.000</span>
              </div>
              <div class="col-md-2 text-end">
                <button class="btn btn-danger delete-btn" onclick="removeCartItem(this)">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
          <div class="total-section">
            <h4 class="mb-4">Order Summary</h4>
            <div class="d-flex justify-content-between mb-3">
              <span>Subtotal</span>
              <span id="subtotal">Rp 48.000.000</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span>Shipping</span>
              <span>Free</span>
            </div>
            <hr class="text-light">
            <div class="d-flex justify-content-between mb-4">
              <h5 class="mb-0">Total</h5>
              <h5 class="mb-0" id="totalAmount">Rp 48.000.000</h5>
            </div>
            <div class="d-grid gap-2">
              <a href="<?= base_url('checkout')?>" class="btn btn-light btn-custom">
                <i class="fas fa-credit-card me-2"></i>Proceed to Checkout
              </a>
              <a href="<?= base_url()?>" class="btn btn-outline-light btn-custom">
                <i class="fas fa-arrow-left me-2"></i>Continue Shopping
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer remains the same -->
    <footer class="footer py-4 mt-5">
      <!-- Footer content remains the same -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Add JavaScript for cart functionality -->
    <script>
      function formatCurrency(amount) {
        return 'Rp ' + amount.toLocaleString() + ',-';
      }
      
      function updateTotals() {
        const cartItems = document.querySelectorAll('.cart-item:not(.removing)');
        let total = 0;
        
        cartItems.forEach(item => {
          const price = parseInt(item.dataset.price);
          total += price;
        });
        
        document.getElementById('subtotal').textContent = formatCurrency(total);
        document.getElementById('totalAmount').textContent = formatCurrency(total);
        
        // Update cart badge count
        const cartBadge = document.querySelector('.badge');
        cartBadge.textContent = cartItems.length;
      }
      
      function removeCartItem(button) {
        const cartItem = button.closest('.cart-item');
        cartItem.classList.add('removing');
        
        // Remove the item after animation completes
        setTimeout(() => {
          cartItem.remove();
          updateTotals();
          
          // If no items left, you might want to show an empty cart message
          if (document.querySelectorAll('.cart-item').length === 0) {
            const container = document.getElementById('cartItemsContainer');
            container.innerHTML = `
              <div class="text-center p-5">
                <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                <h3>Your cart is empty</h3>
                <p class="text-muted">Add some items to your cart to get started!</p>
                <a href="<?= base_url()?>" class="btn btn-primary btn-custom mt-3">
                  <i class="fas fa-shopping-bag me-2"></i>Start Shopping
                </a>
              </div>
            `;
          }
        }, 500);
      }
    </script>
  </body>
</html>