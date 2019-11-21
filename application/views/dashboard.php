<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- .content -->
    <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">Halaman ini masih dalam tahap pengembangan! Halaman ini akan berisi ringkasan dari data umat.</div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-primary text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-male"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Laki-laki</p>
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_umat_laki_lingkungan; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-success text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-female"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Perempuan</p>
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_umat_perempuan_lingkungan; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-danger text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-user"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Keluarga</p>
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_kk_lingkungan; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-users"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Umat</p>
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_umat_lingkungan; ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-6">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Jumlah Data Umat Berdasarkan Jenis Profesi
                    </div>
                    <div class="card-body">
                        <?php
                            $profesi_umat = array_count_values($jumlah_pekerjaan_umat_lingkungan);
                            arsort($profesi_umat);
                            $labels = array_keys($profesi_umat);
                            $data = array_values($profesi_umat);
                        ?>
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Profesi</th>
                                    <th scope="col">Jumlah Umat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($profesi_umat as $profesi => $jumlah) { ?>
                                <tr>
                                    <td><?php
                                    if (isset($list_profesi[$profesi])) {
                                        echo $list_profesi[$profesi];
                                    } else {echo 'Kode Profesi Kosong';} ?></td>
                                    <td><?php echo $jumlah; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Jumlah Data Umat Berdasarkan Jenis Kelamin
                    </div>
                    <div class="card-body">
                        <canvas id="laki-perempuan"></canvas>
                    </div>
                    <script>
                        new Chart(document.getElementById('laki-perempuan'), {
                            'type':'doughnut',
                            'data': {
                                'labels':['Laki-Laki', 'Perempuan'],
                                'datasets':[ {
                                    'label': 'Jumlah Data Umat Berdasarkan Jenis Kelamin',
                                    'data': [<?php echo $jumlah_umat_laki_lingkungan; ?>, <?php echo $jumlah_umat_perempuan_lingkungan; ?>],
                                    'backgroundColor': ['rgb(255, 99, 132)', 'rgb(54, 162, 235)']
                                }]
                            }
                        }
                        );
                    </script>
                </div>
            </div>
        </div>
        <!-- .content -->
    </div>