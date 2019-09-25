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
        <form action="<?= base_url('administrator/pemesanan/tambah')?>" method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
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
                                <input type="text" name="pemesanan_nama" required="required" placeholder="nama" class="form-control">
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
