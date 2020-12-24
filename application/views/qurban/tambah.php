<div class="container">

    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Shohibul Qurban
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Nomor Telpon</label>
                            <input type="number" name="telpon" class="form-control" id="telpon">
                            <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hewan">Hewan</label>
                            <select class="form-control" id="hewan" name="hewan">
                                <option value="Sapi">Sapi</option>
                                <option value="Kerbau">Kerbau</option>
                                <option value="Kambing">Kambing</option>
                                <option value="Domba">Domba</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>