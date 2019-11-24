<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php foreach ($daftaradmin as $admin) { ?>
<div class="modal fade" id="perbaruiadmin-<?php echo $admin['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perbarui Data Admin <?php echo $admin['username']; ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('admin'); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <input hidden readonly class="form-control" type="text" name="adminid"
                            value="<?php echo $admin['id']; ?>">
                        <div class="form-group">
                            <div class="form-line">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username"
                                    value="<?php echo set_value('username', $admin['username']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label for="namalengkap">Nama</label>
                                <input class="form-control" type="text" name="namalengkap"
                                    value="<?php echo set_value('namalengkap', $admin['namalengkap']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label for="kodelingkungan">Kode Lingkungan</label>
                                <?php
                          $kodelingkungan_attribute = 'class="form-control"';
                          echo form_dropdown('kodelingkungan', $list_lingkungan, $admin['kodelingkungan'], $kodelingkungan_attribute);
                          ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label for="password">Password Baru</label>
                                <input class="form-control" type="password" name="password"
                                    value="<?php echo set_value('password'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label for="password-konfirmasi">Konfirmasi Password</label>
                                <input class="form-control" type="password" name="password-konfirmasi"
                                    value="<?php echo set_value('password-konfirmasi'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" name="perbarui-admin" value="Simpan" class="btn btn-success">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php } ?>