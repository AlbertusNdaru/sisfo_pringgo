<?php foreach ($anggotakeluarga as $umat) { ?>
    <div class="modal fade" id="hapusanggota-<?php echo $umat['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?php echo $umat['nama']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('umat/'.$datakeluarga['np']); ?>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <p>Apakah anda yakin akan menghapus <strong><?php echo $umat['nama']; ?></strong> dari data keluarga <?php echo $datakeluarga['kepalakeluarga']; ?>?</p>
                        <input hidden readonly class="form-control" type="text" name="keluarga" value="<?php echo $datakeluarga['np']; ?>">
                        <input hidden readonly class="form-control" type="text" name="umat" value="<?php echo $umat['id']; ?>">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" name="hapus-umat" value="Hapus" class="btn btn-danger">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<?php } ?>