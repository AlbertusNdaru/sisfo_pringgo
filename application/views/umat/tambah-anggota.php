    <div class="modal fade" id="tambahanggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota Keluarga Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('umat/'.$datakeluarga['np']); ?>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <input readonly hidden class="form-control" type="text" name="keluarga" value="<?php echo $datakeluarga['np']; ?>">
                        <div class="form-group"><div class="form-line">
                          <label for="nama">Nama Lengkap</label>
                          <input class="form-control" type="text" name="nama" value="<?php echo set_value('nama'); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="hubkk">Hubungan Keluarga</label>
                          <?php
                          $hubkk_attribute = 'class="form-control"';
                          echo form_dropdown('hubkk', $hubkk, null, $hubkk_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="tmplahir">Tempat Lahir</label>
                          <input class="form-control" type="text" name="tmplahir" value="<?php echo set_value('tmplahir'); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="tgllahir">Tanggal Lahir</label>
                          <input class="form-control tanggal-lahir" type="text" placeholder="Select a Date" name="tgllahir">
                        </div></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><div class="form-line">
                          <label for="jenkel">Jenis Kelamin</label>
                          <?php
                          $jenkel_attribute = 'class="form-control"';
                          echo form_dropdown('jenkel', $jenkel, null, $jenkel_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="goldar">Golongan Darah</label>
                          <?php
                          $goldar_attribute = 'class="form-control"';
                          echo form_dropdown('goldar', $goldar, null, $goldar_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="pendidikan">Pendidikan</label>
                          <?php
                          $pendidikan_attribute = 'class="form-control"';
                          echo form_dropdown('pendidikan', $pendidikan, null, $pendidikan_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="profesi">Profesi</label>
                          <?php
                          $profesi_attribute = 'class="form-control"';
                          echo form_dropdown('profesi', $profesi, null, $profesi_attribute);
                          ?>
                        </div></div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" name="tambah-anggota" value="Simpan" class="btn btn-primary">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>