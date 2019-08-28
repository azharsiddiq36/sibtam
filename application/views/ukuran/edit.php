<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>
<div class="row">
    <div class="col-md-12">
        <form action="<?= base_url('administrator/ukuran/edit/'.$row['ukuran_id'])?>" method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
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
                                <input type="text" name="ukuran_nama" required="required" value="<?= $row['ukuran_nama']?>" placeholder="nama" class="form-control">
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
