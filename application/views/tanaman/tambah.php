<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>
<div class="row">
    <div class="col-md-12">
        <form action="<?= base_url('administrator/tanaman/tambah')?>" method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
            <!-- START panel-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Fields validation</div>
                </div>
                <div class="panel-body">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanaman_nama" required="required" placeholder="nama" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-6">
                                <select name="tanaman_kategori" class="form-control m-b">
                                    <option>-Pilih Salah Satu-</option>
                                    <?php
                                        foreach ($kategori as $key):
                                        ?>
                                            <option value="<?= $key->kategori_id?>"><?= $key->kategori_nama?></option>
                                        <?php
                                        endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ukuran</label>
                            <div class="col-sm-6">
                                <select name="tanaman_ukuran" class="form-control m-b">
                                    <option>-Pilih Salah Satu-</option>
                                    <?php
                                    foreach ($ukuran as $key):
                                        ?>
                                        <option value="<?= $key->ukuran_id?>"><?= $key->ukuran_nama?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Stok</label>
                            <div class="col-sm-6">
                                <input type="number" name="tanaman_stok" required="required" placeholder="Stok" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga Satuan</label>
                            <div class="col-sm-6">
                                <input type="number" name="tanaman_harga_satuan" required="required" placeholder="Harga Satuan" class="form-control">
                            </div>
                        </div>
                    </fieldset>


                </div>

                <div class="panel-footer text-center">
                    <button type="submit" class="btn btn-info" name="submit">Tambahkan</button>
                </div>
            </div>
            <!-- END panel-->
        </form>
    </div>
</div>