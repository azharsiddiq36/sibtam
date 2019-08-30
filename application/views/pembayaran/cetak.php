<a type="button" class="btn btn-primary pull-right" href="" onclick="printContent('doPrint')">
    <em class="fa fa-plus-circle fa-fw mr-sm"></em>Print</a>
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>

<div class="row">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" id="doPrint">
                <div class="panel-heading"><h3><p align="center">Sistem Informasi Tanaman Obat
                        </p></h3>
                </div>
                <div class="panel-body">
                    <table style="border-color: #1C252C;border: #1C252C;margin:auto" border="2px">
                        <thead>
                        <tr>
                            <th style="padding: 5px">No</th>
                            <th style="padding: 5px">Nomor Pemesanan</th>
                            <th style="padding: 5px">Nama Pemesan</th>
                            <th style="padding: 5px">Tanaman</th>
                            <th style="padding: 5px">Ukuran</th>
                            <th style="padding: 5px">Kategori</th>
                            <th style="padding: 5px">Tanggal Pemesan</th>
                            <th style="padding: 5px">Jumlah</th>
                            <th style="padding: 5px">Total Bayar</th>
                            <th style="padding: 5px">Tanggal Bayar</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key){
                            if ($key->pembayaran_status == 'selesai'){
                                $data = array(
                                    "tanaman_id"=>$key->pemesanan_tanaman_id,
                                );
                                $tanaman = $this->TanamanModel->getOne($data);
                                $data = array(
                                    "ukuran_id"=>$tanaman['tanaman_ukuran_id'],
                                );
                                $ukuran = $this->UkuranModel->getOne($data);
                                $data = array(
                                    "kategori_id"=>$tanaman['tanaman_kategori_id'],
                                );
                                $kategori = $this->KategoriModel->getOne($data);
                                ?>
                                <tr class="odd gradeX">
                                    <td style="padding: 5px"><?= $no?></td>
                                    <td style="padding: 5px"><?= $key->pemesanan_tanaman_id?></td>
                                    <td style="padding: 5px"><?= $key->pemesanan_nama?></td>
                                    <td style="padding: 5px"><?= $tanaman['tanaman_nama']?></td>
                                    <td style="padding: 5px"><?= $ukuran['ukuran_nama']?></td>
                                    <td style="padding: 5px"><?= $kategori['kategori_nama']?></td>
                                    <td style="padding: 5px"><?= date_indo(date("Y-m-d",strtotime($key->pemesanan_tanggal)))?></td>
                                    <td style="padding: 5px"><?= $key->pemesanan_jumlah?></td>
                                    <td style="padding: 5px"><?= $key->pembayaran_jumlah?></td>
                                    <td style="padding: 5px"><?= date_indo(date("Y-m-d",strtotime($key->pembayaran_tanggal)))?></td>

                                </tr>
                                <?php
                                $no++;
                            }
                            }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

