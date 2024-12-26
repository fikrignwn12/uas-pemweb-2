<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container py-4">
    <!-- Order Review Header -->
    <div class="d-flex align-items-center mb-4">
        <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
            <i class="fas fa-clipboard-check text-primary fa-2x"></i>
        </div>
        <h2 class="mb-0 fw-bold text-primary">Review Order</h2>
    </div>

    <!-- Order Summary Card -->
    <div class="card shadow-sm border-0 mb-4 card-hover">
        <div class="card-header bg-primary text-white border-0 py-3">
            <h4 class="mb-0">
                <i class="fas fa-shopping-bag me-2"></i>
                Order Summary
            </h4>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <img src="/api/placeholder/80/80" class="rounded me-3" alt="Product Image">
                <div>
                    <h5 class="mb-1">Pak Vincen</h5>
                    <h4 class="text-primary mb-0">Rp48.000.000</h4>
                </div>
            </div>
            <div class="border-top pt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted mb-1">Subtotal:</p>
                        <h5 class="text-primary">Rp48.000.000</h5>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-muted mb-1">Shipping:</p>
                        <h5 class="text-primary">Free</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipping Address Card -->
    <div class="card shadow-sm border-0 mb-4 card-hover">
        <div class="card-header bg-primary text-white border-0 py-3">
            <h4 class="mb-0">
                <i class="fas fa-map-marker-alt me-2"></i>
                Alamat Pengiriman
            </h4>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                    <i class="fas fa-home text-primary"></i>
                </div>
                <div>
                    <h5 class="mb-2 text-primary">Alamat Utama</h5>
                    <p class="mb-0">Jl. Purnama - Mayang Mangurai</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Method Card -->
    <div class="card shadow-sm border-0 mb-4 card-hover">
        <div class="card-header bg-primary text-white border-0 py-3">
            <h4 class="mb-0">
                <i class="fas fa-credit-card me-2"></i>
                Metode Pembayaran
            </h4>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                    <i class="fas fa-university text-primary"></i>
                </div>
                <div>
                    <h5 class="mb-2 text-primary">Transfer Bank</h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-primary me-2">BCA</span>
                        <h5 class="mb-0">Ahmad Fikri Gunawan</h5>
                    </div>
                    <div class="input-group">
                        <input type="text" value="9977114466" class="form-control bg-light" readonly>
                        <button class="btn btn-primary" type="button" onclick="navigator.clipboard.writeText('1122334455')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="card shadow-sm border-0 card-hover">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="bg-primary bg-opacity-10 rounded p-3">
                    <h5 class="mb-1">TOTAL PEMBAYARAN</h5>
                    <h4 class="mb-0">Rp48.000.000</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="<?= base_url('submit')?>" method="POST">
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-check-circle me-2"></i>
                            Konfirmasi Pesanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-color:rgb(51, 111, 240);
        --primary-light: #e7f1ff;
    }

    body {
        background-color: #f8faff;
    }

    .card {
        border-radius: 1rem;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(13, 110, 253, 0.1) !important;
    }
    
    .btn-primary {
        border-radius: 0.5rem;
        padding: 0.75rem 1.5rem;
    }
    
    .badge {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        border-radius: 0.5rem;
    }
    
    .form-control {
        border-radius: 0.5rem;
        border: 1px solid var(--primary-light);
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(26, 141, 249, 0.89);
    }
    
    .bg-primary {
        background-color: var(--primary-color) !important;
    }
    
    .text-primary {
        color: var(--primary-color) !important;
    }
    
    .bg-light {
        background-color: var(--primary-light) !important;
    }

    .card-header {
        border-bottom: none;
    }

    .input-group {
        box-shadow: 0 2px 6px rgba(13, 28, 61, 0.1);
        border-radius: 0.5rem;
    }
</style>
<?= $this->endSection() ?>