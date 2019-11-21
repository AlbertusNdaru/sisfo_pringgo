<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-white font-weight-bold">
                            Daftar Admin Lingkungan
                        </div>
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="card-body">
                            <button class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#tambahadmin">Tambah Admin</button>
                            <?php $this->load->view('admin/tambah-admin'); ?>
                            <table id="datatables" class="table table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Admin Lingkungan</th>
                                        <th>Username</th>
                                        <th>Lingkungan</th>
                                        <th class="actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($daftaradmin as $admin) { ?>
                                    <tr>
                                        <td><?php echo $admin['namalengkap']; ?></td>
                                        <td><?php echo $admin['username']; ?></td>
                                        <td><?php if ($admin['level'] == 'adminlingkungan') { echo $list_lingkungan[$admin['kodelingkungan']]; } else { echo '<span class="badge badge-success">Administator</span>'; } ?></td>
                                        <td>
                                            <?php if ($admin['level'] == 'adminlingkungan') { ?>
                                            <button class="btn btn-sm btn-icon btn-pill btn-warning" data-toggle="modal" data-target="#perbaruiadmin-<?php echo $admin['id']; ?>"><i class="fa fa-fw fa-edit"></i></button>
                                            <button class="btn btn-sm btn-icon btn-pill btn-danger" data-toggle="modal" data-target="#hapusadmin-<?php echo $admin['id']; ?>"><i class="fa fa-fw fa-trash"></i></button>
                                            <?php } ?>
                                        </td>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php $this->load->view('admin/hapus-admin'); ?>
                            <?php $this->load->view('admin/perbarui-admin'); ?>
                        </div>
                    </div>
                </div>