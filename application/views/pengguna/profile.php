<h3><?= $title?>
    <br>
    <small>Sistem Informasi Bibit Tanaman</small>
</h3>
<?php if ($this->session->flashdata('msg')){
    ?>
    <div class="auto-hide alert alert-success">
        <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
    </div>
    <?php
}?>
    <!-- Grid row -->
    <div class="row">

        <div class="col-md-12">
                     <div class="row">
                        <div class="col-sm-6">
                            <form class="form-horizontal" action="<?= base_url('administrator/profile')?>" method="post" role="form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <p class="form-control-static"><?= $data['pengguna_nama']?></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-5">
                                        <input name="pengguna_nama" class="form-control" value="<?= $data['pengguna_nama']?>" type="text" placeholder="John Pixel">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="pengguna_email" placeholder="example@domain.com" value="<?= $data['pengguna_email']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nomor</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name="pengguna_nomor" value="<?= $data['pengguna_nomor']?>" type="text" placeholder="nomor">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat</label>

                                    <div class="col-sm-5">
                                        <textarea class="form-control" id="inputTextarea1" name="pengguna_alamat"><?= $data['pengguna_alamat']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-10">
                                        <button class="btn btn-lg btn-primary" type="submit" name = "submit">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>Ubah Kata Sandi</h4>
                            <p>Gantilah kata sandi secara berkala untuk mengurangi resiko <i>hacking</i></p>
                            <form class="form-horizontal" role="form" method="post" action="<?= base_url('administrator/profile')?>">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kata Sandi Baru</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Ulang Kata Sandi</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="password" name = "repassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-10">
                                        <button class="btn btn-lg btn-primary" name="ubah" type="submit">Ubah Kata Sandi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


    </div>
    <!-- /Grid row -->

