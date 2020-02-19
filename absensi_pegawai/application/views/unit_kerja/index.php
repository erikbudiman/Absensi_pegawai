<div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
<div class="row ">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header d-block">
                <h3>Data Unit Kerja</h3>
                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#tambahData"><i class="ik ik-plus"></i> Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="dt-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Unit Kerja</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach( $unit_kerja as $row ) : ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row->unit_kerja ?></td>
                                    <td>
                                        <a href="<?= site_url('unit_kerja/edit/'.$row->id) ?>" class="btn btn-success"><i class="ik ik-edit"></i> Edit</a>
                                        <a href="<?= site_url('unit_kerja/hapus/'.$row->id) ?>" class="btn btn-danger btn-hapus"><i class="ik ik-trash"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php $no++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?= form_open() ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="unit_kerja">Unit Kerja</label>
                    <input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Masukan Unit Kerja">
                    <?= form_error('unit_kerja', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>