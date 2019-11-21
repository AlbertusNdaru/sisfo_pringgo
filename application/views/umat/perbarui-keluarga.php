    <div class="modal fade" id="perbaruikeluarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Data Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('umat/'.$datakeluarga['np']); ?>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group"><div class="form-line">
                          <label for="np">Nomor Keluarga</label>
                          <input readonly class="form-control" type="text" name="np" value="<?php echo $datakeluarga['np']; ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="kepalakeluarga">Nama Kepala Keluarga</label>
                          <input readonly class="form-control" type="text" name="kepalakeluarga" value="<?php echo set_value('kepalakeluarga', $datakeluarga['kepalakeluarga']); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="telp">No. Telp</label>
                          <input class="form-control" type="text" name="telp" value="<?php echo set_value('telp', $datakeluarga['telp']); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" rows="5" type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"><?php echo $datakeluarga['alamat']; ?></textarea>
                        </div></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><div class="form-line">
                          <label for="stskwn">Status Pernikahan</label>
                          <?php
                          $status_kawin_attribute = 'class="form-control"';
                          echo form_dropdown('stskwn', $status_kawin, $datakeluarga['stskwn'], $status_kawin_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="libermat">Liber Matrimoni Keluarga</label>
                          <input class="form-control" type="text" name="libermat" value="<?php echo set_value('libermat', $datakeluarga['libermat']); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="tmpnikah">Tempat Menikah</label>
                          <input class="form-control" type="text" name="tmpnikah" value="<?php echo set_value('tmpnikah', $datakeluarga['tmpnikah']); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="tglnikah">Tanggal Menikah</label>
                          <input class="form-control tanggal-menikah" type="text" placeholder="Select a Date" name="tglnikah" value="<?php echo set_value('tglnikah', $datakeluarga['tglnikah']); ?>">
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="jenkk">Jenis Rumah Tangga</label>
                          <?php
                          $jenis_kk_attribute = 'class="form-control"';
                          echo form_dropdown('jenkk', $jenis_kk, $datakeluarga['jenkk'], $jenis_kk_attribute);
                          ?>
                        </div></div>
                        <div class="form-group"><div class="form-line">
                          <label for="statusekonomi">Kondisi Ekonomi Keluarga</label>
                          <?php
                          $statusekonomi_attribute = 'class="form-control"';
                          echo form_dropdown('statusekonomi', $ekonomi, $datakeluarga['statusekonomi'], $statusekonomi_attribute);
                          ?>
                        </div></div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" name="perbarui-keluarga" value="Simpan" class="btn btn-primary">
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>