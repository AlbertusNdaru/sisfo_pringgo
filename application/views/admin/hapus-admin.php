<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php foreach ($daftaradmin as $admin) { ?>
    <div class="modal fade" id="hapusadmin-<?php echo $admin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?php echo $admin['username']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('admin'); ?>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <p>Apakah anda yakin akan menghapus <strong><?php echo $admin['username']; ?></strong> (<?php echo $admin['namalengkap']; ?>) dari data admin?</p>
                        <input hidden readonly class="form-control" type="text" name="adminid" value="<?php echo $admin['id']; ?>">
                        <input hidden readonly class="form-control" type="text" name="adminusername" value="<?php echo $admin['username']; ?>">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" name="hapus-admin" value="Hapus" class="btn btn-danger">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<?php } ?>