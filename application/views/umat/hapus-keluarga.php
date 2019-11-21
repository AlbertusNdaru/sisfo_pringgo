<?php foreach ($daftarkeluarga as $keluarga) { ?>
    <div class="modal fade" id="hapuskeluarga-<?php echo $keluarga['np']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Keluarga <?php echo $keluarga['kepalakeluarga']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('umat'); ?>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <p>Apakah anda yakin akan menghapus semua data keluarga <strong><?php echo $keluarga['kepalakeluarga']; ?></strong>?</p>
                        <input hidden readonly class="form-control" type="text" name="keluarga" value="<?php echo $keluarga['np']; ?>">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" name="hapus-keluarga" value="Hapus" class="btn btn-danger">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<?php } ?>