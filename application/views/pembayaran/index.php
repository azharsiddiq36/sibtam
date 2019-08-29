
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>
<?php if ($this->session->flashdata('msg')){
    ?>
    <div class="auto-hide alert alert-success">
        <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
    </div>
    <?php
}?>
<div class="row">

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Data Tabel |
                <small>Pembayaran</small>
            </div>
            <div class="panel-body">
                <table id="datatable3" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pemesanan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $key){
                        ?>
                        <tr class="odd gradeX">
                            <td><?= $no?></td>
                            <td><?= substr($key->pemesanan_nama,0,2).$key->pemesanan_tanaman_id.$key->pemesanan_id?></td>
                            <td>    <a href="<?= base_url().'assets/img/upload/'.$key->pembayaran_foto?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img width="50px" height="50px" src="<?= base_url().'assets/img/upload/'.$key->pembayaran_foto?>"></a></td>
                            <td><?= $key->pembayaran_jumlah?></td>
                            <td><?= date_indo(date("Y-m-d",strtotime($key->pembayaran_tanggal)))?></td>
                            <td><?= $key->pembayaran_status?></td>
                            <td>
                                <a onclick="return confirm('Apakah anda yakin mengkonfirmasi pembayaran ini?')" href="<?= base_url("administrator/pembayaran/accept/".$key->pembayaran_id)?>"class="btn btn-success" title="setuju"><i class="fa fa-check"></i></a>
                                <a onclick="return confirm('Apakah anda yakin menolak pembayaran ini?')" href="<?= base_url("administrator/pembayaran/deny/".$key->pembayaran_id)?>"class="btn btn-danger" title="tolak"><i class="fa fa-close"></i></a></td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <tr>
                        <th>No</th>
                        <th>Kode Pemesanan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

