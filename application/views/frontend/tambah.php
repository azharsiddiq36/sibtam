<?php if ($this->session->flashdata('msg')){
    ?>
    <div class="auto-hide alert alert-success">
        <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
    </div>
    <?php
}?>
<section class="checkout-area ptb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <h3 class="title">Formulir Pemesanan</h3>
                <form action="<?= base_url('daftar')?>" method="post">
                <div class="check-out-box">

                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Nama*</label>
                                    <input type="text" name="pengguna_nama" required placeholder="Nama" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="text" placeholder="Email" name="pengguna_email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Nomor</label>
                                    <input type="number" name="pengguna_nomor" required placeholder="Nomor" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="password" name="pengguna_password" required placeholder="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="pengguna_alamat"  placeholder="alamat" class="form-control">
                                </div>
                            </div>
                            <div class="place-order">
                                <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>

                </div>

            </div>

        </div>
    </div>
</section>