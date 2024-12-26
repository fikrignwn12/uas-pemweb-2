<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Toko Televisi Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
      h2 {
        font-weight: bold;
        color: #343a40;
      }
      .container {
        margin-top: 30px;
      }
      ul {
        list-style: none;
        padding: 0;
      }
      ul li {
        margin-bottom: 10px;
      }
      ul li a {
        text-decoration: none;
        color: #495057;
        font-weight: 500;
      }
      ul li a:hover {
        color: #0d6efd;
      }
      footer {
        background-color: #dee2e6;
        text-align: center;
        color: #6c757d;
      }
      .sidebar {
        background-color: #e9ecef;
        padding: 15px;
        border-radius: 8px;
      }
      .btn-secondary {
        float: right;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row mb-3 align-items-center">
        <div class="col">
          <h2>Admin Dashboard</h2>
        </div>
        <div class="col text-end">
          <a href="<?= base_url('logout') ?>" class="btn btn-secondary">Logout</a>
        </div>
      </div>
      <div class="row">
        <div class="col-3 sidebar">
          <h5 class="mb-3"></h5>
          <ul>
            <li>
              <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
            </li>
            <li>
              <a href="<?= base_url('admin/daftar-televisi') ?>">Pilihan TELEVISI</a>
            </li>
            <li>
              <a href="<?= base_url('admin/transaksi') ?>">Transaksi</a>
            </li>
            <li>
              <a href="<?= base_url('admin/pelanggan') ?>">Pelanggan</a>
            </li>
          </ul>
        </div>
        <div class="col-9">
          <?= $this->renderSection('main'); ?>
        </div>
      </div>
    </div>

    <footer class="py-3">
      <div class="container">
        &copy; 2024 Toko TELEVISI Borussia Munchen | Jambi
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
