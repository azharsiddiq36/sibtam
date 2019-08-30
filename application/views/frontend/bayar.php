
<?php
        if ($this->session->flashdata('msg')){
            ?>
            <div class="auto-hide alert alert-success">
                <strong>Maaf !</strong> <?= $this->session->flashdata('msg') ?>
            </div>
        <?php
        }
?>
<div class="container">
    <div class="col-sm-12">
        <h2><?= $title ?></h2></p>
    </div>
    <div class="col-lg-10" style="padding-left: 14%">
        <div class="header-search-form">
            <form action="<?= base_url('pembayaran')?>" method="post">
                <input type="text" name="kode" placeholder="Kode Pemesanan">
                <input type="submit" name="cek" value="Search">
            </form>
        </div>
        <?php if ($this->session->flashdata('tersedia')) {
            ?>
            <div class="auto-hide alert alert-success">
                <strong>Selamat !</strong> <?= $this->session->flashdata('tersedia') ?>
            </div>
            <div>
                <div class="order-table">
                    <h2 class="title">Informasi Pemesanan</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Tanaman</th>
                                <th>Nama</th>
                                <th>Nomor</th>
                                <th>Jumlah</th>
                                <th>Total Bayar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?= $data['pemesanan_id']?></td>
                                <td><?= $tanaman['tanaman_nama']?></td>
                                <td><?= $data['pemesanan_nama']?></td>
                                <td><?= $data['pemesanan_nomor']?></td>
                                <td><?= $data['pemesanan_jumlah']?></td>
                                <td><?= $data['pemesanan_harga']?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="payment-holder">

                        <div class="place-order">
                            <form action="<?= base_url('pembayaran/'.$data['pemesanan_id'])?>" method="post" enctype="multipart/form-data">
                                <label>Upload Bukti Pembayaran</label><br><input type="file" name="foto">
                            <br><br><button type="submit" name="submit" class="btn btn-primary">Lakukan Pembayaran</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        elseif ($this->session->flashdata('tidak')){
            ?>
            <div class="auto-hide alert alert-danger">
                <strong>Maaf !</strong> <?= $this->session->flashdata('tidak') ?>
            </div>
        <?php
        }

        ?>
    </div>

</div>




