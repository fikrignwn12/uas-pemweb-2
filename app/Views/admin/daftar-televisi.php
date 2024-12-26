<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5">Daftar TELEVISI</h2>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-televisi/tambah')?>" class="btn btn-primary">Tambah TELEVISI</a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama TELEVISI</th>
                <th scope="col">Merek</th>
                <th scope="col">Spesifikasi</th>
                <th scope="col">Tahun Rilis</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($televisi as $Televisions):?>
            <tr>
                <th scope="row"><?=$Televisions['id']?></th>
                <td><?= $Televisions['nama']?></td>
                <td><?= $Televisions['merek']?></td>
                <td><?= $Televisions['spesifikasi']?></td>
                <td><?= $Televisions['tahun_rilis']?></td>
                <td>
                    <img src="<?= base_url($Televisions['gambar'])?>" alt="" style="width: 150px; height: auto;">
                </td>
                <td><?= $Televisions['harga']?></td>
                <td>
                    <a href="<?= base_url('admin/daftar-televisi/edit')?>/<?=$Televisions['id']?>"class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-televisi/hapus')?>/<?=$Televisions['id']?>"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>
