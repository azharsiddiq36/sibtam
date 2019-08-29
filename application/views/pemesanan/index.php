
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>

<div class="row">

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Data Tabel |
                <small>Pemesanan</small>
            </div>
            <div class="panel-body">
                <table id="datatable3" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanaman</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Nomor</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $key){
                        ?>
                        <tr class="odd gradeX">
                            <td><?= $no?></td>
                            <td><?= $key->pemesanan_nama?></td>
                            <td><?= $key->tanaman_nama?></td>
                            <td><?= $key->pemesanan_jumlah?></td>
                            <td><?= $key->pemesanan_harga?></td>
                            <td><?= date_indo(date("Y-m-d",strtotime($key->pemesanan_tanggal)))?></td>
                            <td><?= $key->pemesanan_nomor?></td>
                            <td><?= $key->pemesanan_alamat?></td>
                            <td><?= $key->pemesanan_status  ?></td>

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
                        <th>Nama</th>
                        <th>Tanaman</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Nomor</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

