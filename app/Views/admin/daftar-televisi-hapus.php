<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus TELEVISI</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus TELEVISI</h1>
        
        <?php if (isset($televisi)): ?>
            <p>Apakah Anda yakin ingin menghapus TELEVISI dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($televisi['nama']); ?></li>
                <li><strong>Merek:</strong> <?= htmlspecialchars($televisi['merek']); ?></li>
                <li><strong>Spesifikasi:</strong> <?= htmlspecialchars($televisi['spesifikasi']); ?></li>
                <li><strong>Tahun Rilis:</strong> <?= htmlspecialchars($televisi['tahun_rilis']); ?></li>
                <li><strong>Gambar:</strong> <?= htmlspecialchars($televisi['gambar']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($televisi['harga'], 2, ',', '.'); ?></li>
            </ul>
            
            <form action="/admin/daftar-televisi/hapus/<?= $televisi['id']; ?>" method="post">
                <?= csrf_field(); ?>
                
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-televisi" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data TELEVISI tidak ditemukan.</p>
            <a href="/admin/daftar-televisi" class="btn btn-secondary">Kembali ke Daftar TELEVISI</a>
        <?php endif; ?>
    </div>
</body>
</html>