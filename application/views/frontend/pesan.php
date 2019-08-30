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
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h3 class="title">Formulir Pemesanan</h3>
                <form action="<?= base_url('pemesanan/'.$data['tanaman_id'])?>" method="post">
                <div class="check-out-box">

                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Nama Depan*</label>
                                    <input type="text" name="depandepan" required placeholder="Nama Depan" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Nama Belakang*</label>
                                    <input type="text" name="belakang" placeholder="Nama Belakang" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Jumlah*</label>
                                    <input type="number" name="jumlah" required placeholder="Jumlah" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Harga Satuan*</label>
                                    <input type="text" name="harga" readonly value="<?= $data['tanaman_harga_satuan']?>" required placeholder="Harga" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Nomor</label>
                                    <input type="text" name="nomor" required placeholder="Nomor Handphone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" placeholder="alamat" class="form-control">
                                </div>
                            </div>
                        </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="order-table">
                    <h2 class="title">Informasi Tanaman</h2>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Tanaman</th>
                                    <th>Ukuran</th>
                                    <th>Kategori</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td width="30%" class="product-thumbnail"><img src="<?= base_url()?>assets/img/upload/<?= $data['tanaman_foto']?>" alt="shop-img"></td>
                                    <td><?= $data['tanaman_nama']?></td>
                                    <td><span class="amount"><?= $ukuran['ukuran_nama']?></span></td>
                                    <td><span class="amount"><?= $kategori['kategori_nama']?></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="payment-holder">

                            <div class="place-order">
                                <button type="submit" name="submit" class="btn btn-primary">Lakukan Pemesanan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>