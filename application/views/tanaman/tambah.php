<h3><?= $title?>
    <br>
    <small>Sistem Informasi Bibit Tanaman</small>
</h3>
<?php if ($this->session->flashdata('msg')){
    ?>
    <div data-toggle="notify" data-onload data-message="&lt;b&gt;Maaf ! <?= $this->session->flashdata('msg')?>&lt;/b&gt;." data-options="{&quot;status&quot;:&quot;warning&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
    <?php
}?>
<div class="row">
    <div class="col-md-12">
        <form action="<?= base_url('administrator/tanaman/tambah')?>" enctype="multipart/form-data" method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
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
                            <label class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-6">
                                <input type="file" name="foto" required="required" placeholder="Stok">
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
