<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-white font-weight-bold">
                            Daftar Lingkungan
                        </div>
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="card-body">
                            <table id="datatables" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Lingkungan</th>
                                        <th>Kode Lingkungan</th>
                                        <th class="actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($daftarlingkungan as $lingkungan) { ?>
                                    <tr>
                                        <td><?php echo $lingkungan['nama']; ?></td>
                                        <td><?php echo $lingkungan['kodelingkungan']; ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-pill btn-warning" data-toggle="modal" data-target="#perbaruilingkungan-<?php echo $lingkungan['id']; ?>"><i class="fa fa-fw fa-edit"></i></button>
                                            <button class="btn btn-sm btn-icon btn-pill btn-danger" data-toggle="modal" data-target="#hapuslingkungan-<?php echo $lingkungan['id']; ?>"><i class="fa fa-fw fa-trash"></i></button>
                                        </td>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php $this->load->view('admin/hapus-admin'); ?>
                            <?php $this->load->view('admin/perbarui-admin'); ?>
                        </div>
                    </div>
                </div>