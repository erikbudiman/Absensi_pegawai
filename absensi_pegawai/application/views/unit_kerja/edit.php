<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="row ">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header d-block">
                <h3>Edit Data Unit Kerja</h3>
            </div>
            <div class="card-body">
                <?= form_open() ?>
                    <div class="form-group">
                        <label for="unit_kerja">Unit Kerja</label>
                        <input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Masukan Unit Kerja" value="<?= $unit_kerja->unit_kerja ?>">
                        <?= form_error('unit_kerja', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"><i class="ik ik-save"></i> Simpan</button>
                    <button class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>