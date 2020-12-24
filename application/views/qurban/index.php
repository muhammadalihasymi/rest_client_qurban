<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <a href="<?= base_url(); ?>qurban_c/tambah" class="btn btn-primary">Tambah
                Data Qurban</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="text-center">Daftar Shohibul Qurban</h3>
            <?php if (empty($qurban)) : ?>
                <div class="alert alert-danger" role="alert">
                    data qurban tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($qurban as $qr) : ?>
                    <li class="list-group-item">
                        <?= $qr['nama']; ?>
                        <a href="<?= base_url(); ?>qurban_c/hapus/<?= $qr['kode_qurban']; ?>" class="btn btn-danger btn-sm float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>qurban_c/ubah/<?= $qr['kode_qurban']; ?>" class="btn btn-success btn-sm mr-3 float-right">ubah</a>
                        <a href="<?= base_url(); ?>qurban_c/detail/<?= $qr['kode_qurban']; ?>" class="btn btn-primary btn-sm mr-3 float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>