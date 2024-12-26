<?= $this->extend('admin/template') ?>
<?= $this->section('main') ?>
<h2 class="mb-5">Edit TELEVISI</h2>
<form action="<?= base_url('admin/daftar-televisi/change') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= $televisi['id']; ?>">
    <input type="hidden" name="gambar_lama" value="<?= $televisi['gambar']; ?>">
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama TELEVISI</label>
        <input type="text" class="form-control w-50" id="nama" 
            placeholder="nama" name="nama" value="<?= $televisi['nama']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="merek" class="form-label">Merek</label>
        <input type="text" class="form-control" id="merek" name="merek" value="<?= $televisi['merek']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="spesifikasi" class="form-label">Spesifikasi</label>
        <textarea class="form-control" id="spesifikasi" name="spesifikasi" 
            autocomplete="off" required><?= $televisi['spesifikasi']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
        <input type="number" class="form-control" id="tahun_rilis" name="tahun_rilis" value="<?= $televisi['tahun_rilis']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar TELEVISI</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        <small>Gambar saat ini: <?= $televisi['gambar']; ?></small>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= $televisi['harga']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <a href="<?= base_url('admin/daftar-televisi') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</form>
<?= $this->endSection() ?>