<div class="container">
    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Shohibul Qurban
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $qurban['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $qurban['alamat']; ?></h6>
                    <p class="card-text"><?= $qurban['telpon']; ?></p>
                    <p class="card-text"><?= $qurban['hewan']; ?></p>
                    <a href="<?= base_url(); ?>qurban_c" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>