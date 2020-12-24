<div class="container">

    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Shohibul Qurban
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kode_qurban" value="<?= $qurban['kode_qurban']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $qurban['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $qurban['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Nomor Telpon</label>
                            <input type="number" name="telpon" class="form-control" id="telpon" value="<?= $qurban['telpon']; ?>">
                            <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hewan">Hewan</label>
                            <select class="form-control" id="hewan" name="hewan">
                                <?php foreach ($hewan as $j) : ?>
                                    <?php if ($j == $qurban['hewan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>