<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!-- .content -->
        <div class="content p-4">
        	
            <h2 class="mb-4"><?php echo $title_page; ?></h2>

            <div class="alert alert-info" role="alert">Halaman ini masih dalam tahap pengembangan! Halaman ini akan berisi ringkasan dari data umat.</div>

            <div class="row mb-4">
                <?php $this->load->view('admin/data-admin'); ?>
            </div>
            <div class="row mb-4">
                <?php $this->load->view('admin/data-lingkungan'); ?>
            </div>
        <!-- .content -->
        </div>